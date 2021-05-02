<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('content', __('内容'))->limit(100);
        $grid->column('user.real_name', __('真实姓名'));
        $grid->column('topic.topic_name', __('所属话题'));
        $grid->column('activity_id', __('Activity id'));
        $grid->column('reply_count', __('Reply count'));
        $grid->column('view_count', __('View count'));
        $grid->column('order', __('Order'));
        $grid->column('like_count', __('Like count'));
        $grid->column('plate_id', __('Plate id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
//        $grid->column('images')->display(function ($images){
//            return json_decode($images,true);
//        })->image('',50,50);

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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('Content'));
        $show->field('user_id', __('User id'));
        $show->field('topic_id', __('Topic id'));
        $show->field('activity_id', __('Activity id'));
        $show->field('reply_count', __('Reply count'));
        $show->field('view_count', __('View count'));
        $show->field('order', __('Order'));
        $show->field('like_count', __('Like count'));
        $show->field('plate_id', __('Plate id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('images', __('Images'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->textarea('content', __('Content'));
        $form->number('user_id', __('User id'));
        $form->number('topic_id', __('Topic id'));
        $form->number('activity_id', __('Activity id'));
        $form->number('reply_count', __('Reply count'));
        $form->number('view_count', __('View count'));
        $form->number('order', __('Order'));
        $form->number('like_count', __('Like count'));
        $form->number('plate_id', __('Plate id'));
        $form->textarea('images', __('Images'));

        return $form;
    }
}
