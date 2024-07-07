<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Order;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('amount', __('Amount'));
        $grid->column('address', __('Address'));
        $grid->column('status', __('Status'));
        $grid->column('transaction_id', __('Transaction id'));
        $grid->column('currency', __('Currency'));
        $grid->column('time', __('Time'));
        $grid->column('user_id', __('User id'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('amount', __('Amount'));
        $show->field('address', __('Address'));
        $show->field('status', __('Status'));
        $show->field('transaction_id', __('Transaction id'));
        $show->field('currency', __('Currency'));
        $show->field('time', __('Time'));
        $show->field('user_id', __('User id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->decimal('amount', __('Amount'));
        $form->textarea('address', __('Address'));
        $form->text('status', __('Status'));
        $form->text('transaction_id', __('Transaction id'));
        $form->text('currency', __('Currency'));
        $form->datetime('time', __('Time'))->default(date('Y-m-d H:i:s'));
        $form->number('user_id', __('User id'));

        return $form;
    }
}
