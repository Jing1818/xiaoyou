<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('uid', __('用户编号'));

        $grid->column('account', __('用户名'));
        $grid->column('avatar', __('头像'))->image('','100','100');

//        $grid->column('pwd', __('Pwd'));
        $grid->column('real_name', __('真实姓名'));
        $grid->column('birthday', __('生日'));
        $grid->column('card_id', __('身份证'));
        $grid->column('mark', __('Mark'));
//        $grid->column('partner_id', __('Partner id'));
        $grid->column('group_id', __('Group id'));
        $grid->column('nickname', __('昵称'));
        $grid->column('phone', __('手机'));
        $grid->column('add_time', __('注册时间'));
        $grid->column('add_ip', __('注册ip'));
        $grid->column('last_time', __('最后登录时间'));
        $grid->column('last_ip', __('上次登录ip'));
        $grid->column('now_money', __('现有余额'));
//        $grid->column('brokerage_price', __('Brokerage price'));
        $grid->column('integral', __('积分余额'));
        $grid->column('exp', __('经验'));
        $grid->column('sign_num', __('登录次数'));
        $grid->column('status', __('状态'));
        $grid->column('level', __('等级'));
//        $grid->column('spread_open', __('Spread open'));
//        $grid->column('spread_uid', __('Spread uid'));
//        $grid->column('spread_time', __('Spread time'));
        $grid->column('user_type', __('用户类型'));
//        $grid->column('is_promoter', __('Is promoter'));
        $grid->column('pay_count', __('购买次数'));
        $grid->column('spread_count', __('推广次数'));
//        $grid->column('clean_time', __('Clean time'));
        $grid->column('addres', __('地址'));
//        $grid->column('adminid', __('Adminid'));
        $grid->column('login_type', __('登陆类型'));
//        $grid->column('record_phone', __('Record phone'));
//        $grid->column('is_money_level', __('Is money level'));
//        $grid->column('is_ever_level', __('Is ever level'));
//        $grid->column('overdue_time', __('Overdue time'));
//        $grid->column('uniqid', __('Uniqid'));
        $grid->column('post_count', __('发帖次数'));
        $grid->column('comment_count', __('评论次数'));
        $grid->column('like_total', __('收到的赞'));
        $grid->column('follow_count', __('关注数量'));
        $grid->column('fans_count', __('粉丝数量'));
//        $grid->column('bbs_roles', __('Bbs roles'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('uid', __('Uid'));
        $show->field('account', __('Account'));
        $show->field('pwd', __('Pwd'));
        $show->field('real_name', __('Real name'));
        $show->field('birthday', __('Birthday'));
        $show->field('card_id', __('Card id'));
        $show->field('mark', __('Mark'));
        $show->field('partner_id', __('Partner id'));
        $show->field('group_id', __('Group id'));
        $show->field('nickname', __('Nickname'));
        $show->field('avatar', __('Avatar'));
        $show->field('phone', __('Phone'));
        $show->field('add_time', __('Add time'));
        $show->field('add_ip', __('Add ip'));
        $show->field('last_time', __('Last time'));
        $show->field('last_ip', __('Last ip'));
        $show->field('now_money', __('Now money'));
        $show->field('brokerage_price', __('Brokerage price'));
        $show->field('integral', __('Integral'));
        $show->field('exp', __('Exp'));
        $show->field('sign_num', __('Sign num'));
        $show->field('status', __('Status'));
        $show->field('level', __('Level'));
        $show->field('spread_open', __('Spread open'));
        $show->field('spread_uid', __('Spread uid'));
        $show->field('spread_time', __('Spread time'));
        $show->field('user_type', __('User type'));
        $show->field('is_promoter', __('Is promoter'));
        $show->field('pay_count', __('Pay count'));
        $show->field('spread_count', __('Spread count'));
        $show->field('clean_time', __('Clean time'));
        $show->field('addres', __('Addres'));
        $show->field('adminid', __('Adminid'));
        $show->field('login_type', __('Login type'));
        $show->field('record_phone', __('Record phone'));
        $show->field('is_money_level', __('Is money level'));
        $show->field('is_ever_level', __('Is ever level'));
        $show->field('overdue_time', __('Overdue time'));
        $show->field('uniqid', __('Uniqid'));
        $show->field('post_count', __('Post count'));
        $show->field('comment_count', __('Comment count'));
        $show->field('like_total', __('Like total'));
        $show->field('follow_count', __('Follow count'));
        $show->field('fans_count', __('Fans count'));
        $show->field('bbs_roles', __('Bbs roles'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('account', __('Account'));
        $form->password('pwd', __('Pwd'));
        $form->text('real_name', __('Real name'));
        $form->number('birthday', __('Birthday'));
        $form->text('card_id', __('Card id'));
        $form->text('mark', __('Mark'));
        $form->number('partner_id', __('Partner id'));
        $form->number('group_id', __('Group id'));
        $form->text('nickname', __('Nickname'));
        $form->image('avatar', __('Avatar'));
        $form->mobile('phone', __('Phone'));
        $form->number('add_time', __('Add time'));
        $form->text('add_ip', __('Add ip'));
        $form->number('last_time', __('Last time'));
        $form->text('last_ip', __('Last ip'));
        $form->decimal('now_money', __('Now money'))->default(0.00);
        $form->decimal('brokerage_price', __('Brokerage price'))->default(0.00);
        $form->number('integral', __('Integral'));
        $form->decimal('exp', __('Exp'))->default(0.00);
        $form->number('sign_num', __('Sign num'));
        $form->switch('status', __('Status'))->default(1);
        $form->number('level', __('Level'));
        $form->switch('spread_open', __('Spread open'))->default(1);
        $form->number('spread_uid', __('Spread uid'));
        $form->number('spread_time', __('Spread time'));
        $form->text('user_type', __('User type'));
        $form->switch('is_promoter', __('Is promoter'));
        $form->number('pay_count', __('Pay count'));
        $form->number('spread_count', __('Spread count'));
        $form->number('clean_time', __('Clean time'));
        $form->text('addres', __('Addres'));
        $form->number('adminid', __('Adminid'));
        $form->text('login_type', __('Login type'));
        $form->text('record_phone', __('Record phone'));
        $form->switch('is_money_level', __('Is money level'));
        $form->switch('is_ever_level', __('Is ever level'));
        $form->number('overdue_time', __('Overdue time'));
        $form->text('uniqid', __('Uniqid'));
        $form->number('post_count', __('Post count'));
        $form->number('comment_count', __('Comment count'));
        $form->number('like_total', __('Like total'));
        $form->number('follow_count', __('Follow count'));
        $form->number('fans_count', __('Fans count'));
        $form->text('bbs_roles', __('Bbs roles'));

        return $form;
    }
}
