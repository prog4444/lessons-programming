<?php

namespace App\Admin\Controllers;

use App\Models\Zadacha;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ZadachaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Zadacha';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zadacha());
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Name'))->sortable();
        $grid->column('status', __('Status'))->sortable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Zadacha::findOrFail($id));
        $show->column('id', __('ID'))->sortable();
        $show->column('name', __('Name'))->sortable();
        $show->column('status', __('Status'))->sortable();
        $show->column('created_at', __('Created at'));
        $show->column('updated_at', __('Updated at'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Zadacha());
        $form->text('name', __('Name'));
        $form->text('status', __('Status'));
    
        return $form;
    }
}
