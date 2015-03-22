<?php

class Admin_ProductResource extends BaseResource
{
    /**
     * 资源视图目录
     * @var string
     */
    protected $resourceView = 'admin.product';

    /**
     * 资源模型名称，初始化后转为模型实例
     * @var string|Illuminate\Database\Eloquent\Model
     */
    protected $model = 'Product';

    /**
     * 资源标识
     * @var string
     */
    protected $resource = 'product';

    /**
     * 资源数据库表
     * @var string
     */
    protected $resourceTable = 'product';

    /**
     * 资源名称（中文）
     * @var string
     */
    protected $resourceName = '产品';

    /**
     * 自定义验证消息
     * @var array
     */
    protected $validatorMessages = array(
        'title.required'    => '请输入标题。',
        'title.between'     => '标题字数必须在:min和:max之间。',
        'price.required'    => '请填写价格',
        'price.numeric'     => '价格格式不正确，必须为数字',
        'code.required'     => '请输入编码。',
        'code.unique'       => '此编码已被使用。',
        'code.between'      => '编码长度在:min和:max之间',
        'code.alpha_num'    => '编码只允许字母和数字',
        'varietie.required' => '请选择鹦鹉品种。',
        'varietie.min'      => '请选择鹦鹉品种。',
    );

    /**
     * 资源列表页面
     * GET         /resource
     * @return Response
     */
    public function index()
    {

        return View::make($this->resourceView . '.index');
    }

    /**
     * 资源创建动作
     * POST        /resource
     * @return Response
     */
    public function store()
    {
        // 获取所有表单数据.
        $data = Input::all();
        // 创建验证规则
        $unique = $this->unique();
        $rules  = array(
            'title'    => 'required|between:5,30|' . $unique,
            'code'     => 'required|alpha_dash|between:3,10|' . $unique,
            'varietie' => 'required|min:1',
            'price'    => 'required|numeric'
        );
        // 自定义验证消息
        // 开始验证
        $validator = Validator::make($data, $rules, $this->validatorMessages);
        if ($validator->passes()) {
            // 验证成功
            // 添加资源
            $model        = $this->model;
            $model->title = Input::get('title');
            $model->code  = Input::get('code');
            $model->price    = floatval(Input::get('price'));
            $model->varietie = intval(Input::get('varietie'));
            $model->birthday = Input::get('birthday');
            $model->faVarietie = Input::get('faVarietie');
            $model->maVarietie = Input::get('maVarietie');
            $model->dominantGene = Input::get('dominantGene');
            $model->implicitGene = Input::get('implicitGene');
            $model->description = Input::get('description','');
            $model->created_at = new Carbon;

            if ($model->save()) {
                // 添加成功
                return Redirect::back()
                    ->with('success', '<strong>' . $this->resourceName . '添加成功：</strong>您可以继续添加新' . $this->resourceName . '，或返回'.HTML::link(route('product.index',$this->resourceName . '列表')));
            } else {
                // 添加失败
                return Redirect::back()
                    ->withInput()
                    ->with('error', '<strong>' . $this->resourceName . '添加失败。</strong>');
            }
        } else {
            // 验证失败
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
     * 资源编辑动作
     * PUT/PATCH   /resource/{id}
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        // 获取所有表单数据.
        $data = Input::all();
        // 创建验证规则
        $rules = array(
            'email'    => 'required|email|' . $this->unique('email', $id),
            'password' => 'alpha_dash|between:6,16|confirmed',
            'is_admin' => 'in:1',
        );
        // 自定义验证消息
        $messages = $this->validatorMessages;
        // 开始验证
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->passes()) {
            // 验证成功
            // 更新资源
            $model           = $this->model->find($id);
            $model->email    = Input::get('email');
            $model->is_admin = (int)Input::get('is_admin', 0);
            if ($model->save()) {
                // 更新成功
                return Redirect::back()
                    ->with('success', '<strong>' . $this->resourceName . '更新成功：</strong>您可以继续编辑' . $this->resourceName . '，或返回' . $this->resourceName . '列表。');
            } else {
                // 更新失败
                return Redirect::back()
                    ->withInput()
                    ->with('error', '<strong>' . $this->resourceName . '更新失败。</strong>');
            }
        } else {
            // 验证失败
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }


}
