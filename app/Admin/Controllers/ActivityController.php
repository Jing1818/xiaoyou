<?php

namespace App\Admin\Controllers;

use App\Models\Activity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActivityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Activity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Activity());

        $grid->column('id', __('Id'));
        $grid->column('activity_name', __('Activity name'));
        $grid->column('activity_desc', __('Activity desc'));
        $grid->column('status', __('Status'));
        $grid->column('start_time', __('Start time'));
        $grid->column('end_time', __('End time'));
        $grid->column('user_id', __('User id'));
        $grid->column('is_admin', __('Is admin'));
        $grid->column('join_num', __('Join num'));
        $grid->column('is_show_winner', __('Is show winner'));
        $grid->column('activity_type', __('Activity type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('cover', __('Cover'));

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
        $show = new Show(Activity::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('activity_name', __('Activity name'));
        $show->field('activity_desc', __('Activity desc'));
        $show->field('status', __('Status'));
        $show->field('start_time', __('Start time'));
        $show->field('end_time', __('End time'));
        $show->field('user_id', __('User id'));
        $show->field('is_admin', __('Is admin'));
        $show->field('join_num', __('Join num'));
        $show->field('is_show_winner', __('Is show winner'));
        $show->field('activity_type', __('Activity type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('cover', __('Cover'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Activity());

        $form->text('activity_name', __('Activity name'));
        $form->text('activity_desc', __('Activity desc'));
        $form->switch('status', __('Status'));
        $form->number('start_time', __('Start time'));
        $form->number('end_time', __('End time'));
        $form->number('user_id', __('User id'));
        $form->switch('is_admin', __('Is admin'));
        $form->number('join_num', __('Join num'));
        $form->switch('is_show_winner', __('Is show winner'))->default(1);
        $form->text('activity_type', __('Activity type'))->default('text');
        $form->image('cover', __('Cover'));

        return $form;
    }
}
