<?php

namespace App\Admin\Controllers;

use SmallRuralDog\Admin\Components\Antv\Area;
use SmallRuralDog\Admin\Components\Antv\Column;
use SmallRuralDog\Admin\Components\Antv\Line;
use SmallRuralDog\Admin\Components\Antv\StepLine;
use SmallRuralDog\Admin\Components\Widgets\Alert;
use SmallRuralDog\Admin\Components\Widgets\Card;
use SmallRuralDog\Admin\Controllers\AdminController;
use SmallRuralDog\Admin\Layout\Content;
use SmallRuralDog\Admin\Layout\Row;

class HomeController extends AdminController
{


    public function index(Content $content)
    {
        // $content->className('m-10')
        //     ->row(function (Row $row) {
        //         $row->gutter(10);
        //         $row->column(12, Alert::make("Hello, classmate! !", "Welcome laravel-vue-admin")->showIcon()->closable(false)->type("success"));
        //         $row->column(12, Alert::make("Hello, classmate! !", "Welcome laravel-vue-admin")->showIcon()->closable(false)->type("error"));
        //     })->row(function (Row $row) {
        //         $row->gutter(10);
        //         $row->className('mt-10');
        //         $row->column(12, Alert::make("Hello, classmate! !", "Welcome laravel-vue-admin")->showIcon()->closable(false)->type("info"));
        //         $row->column(12, Alert::make("Hello, classmate! !", "Welcome laravel-vue-admin")->showIcon()->closable(false)->type("warning"));
        //     })->row(function (Row $row) {
        //         $row->gutter(10)->className('mt-10');
        //         $row->column(12, Card::make()->bodyStyle(['padding' => '0'])->content(
        //             Line::make()
        //                 ->data(function () {
        //                     $data = collect();
        //                     for ($year = 2010; $year <= 2020; $year++) {
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小红',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小白',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                     }
        //                     return $data;
        //                 })
        //                 ->config(function () {
        //                     return [
        //                         'title' => [
        //                             'visible' => true,
        //                             'text' => 'Line chart',
        //                         ],
        //                         'description' => [
        //                             'visible' => true,
        //                             'text' => 'They are most often used to represent trends and relationships rather than convey specific values.',
        //                         ],
        //                         'seriesField' => 'type',
        //                         'smooth' => true,
        //                         'xField' => 'year',
        //                         'yField' => 'value'
        //                     ];
        //                 })
        //         ));
        //         $row->column(12, Card::make()->bodyStyle(['padding' => '0'])->content(
        //             Area::make()
        //                 ->data(function () {
        //                     $data = collect();
        //                     for ($year = 2010; $year <= 2020; $year++) {
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小红面积',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小白面积',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                     }
        //                     return $data;
        //                 })
        //                 ->config(function () {
        //                     return [
        //                         'title' => [
        //                             'visible' => true,
        //                             'text' => 'Area chart',
        //                         ],
        //                         'description' => [
        //                             'visible' => true,
        //                             'text' => 'They are most often used to represent trends and relationships rather than convey specific values.',
        //                         ],
        //                         'seriesField' => 'type',
        //                         'smooth' => false,
        //                         'xField' => 'year',
        //                         'yField' => 'value'
        //                     ];
        //                 })
        //         ));
        //     })->row(function (Row $row) {
        //         $row->gutter(10)->className('mt-10');
        //         $row->column(12, Card::make()->bodyStyle(['padding' => '0'])->content(
        //             StepLine::make()
        //                 ->data(function () {
        //                     $data = collect();
        //                     for ($year = 2010; $year <= 2020; $year++) {
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小红面积',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                     }
        //                     return $data;
        //                 })
        //                 ->config(function () {
        //                     return [
        //                         'title' => [
        //                             'visible' => true,
        //                             'text' => 'ladder diagram',
        //                         ],
        //                         'description' => [
        //                             'visible' => true,
        //                             'text' => 'Staircase line charts are used to represent data over a continuous span of time',
        //                         ],
        //                         'smooth' => false,
        //                         'xField' => 'year',
        //                         'yField' => 'value'
        //                     ];
        //                 })
        //         ));
        //         $row->column(12, Card::make()->bodyStyle(['padding' => '0'])->content(
        //             Column::make()
        //                 ->data(function () {
        //                     $data = collect();
        //                     for ($year = 2010; $year <= 2020; $year++) {
        //                         $data->push([
        //                             'year' => (string)$year,
        //                             'type' => '小红面积',
        //                             'value' => rand(100, 1000)
        //                         ]);
        //                     }
        //                     return $data;
        //                 })
        //                 ->config(function () {
        //                     return [
        //                         'title' => [
        //                             'visible' => true,
        //                             'text' => 'Bar chart',
        //                         ],
        //                         'description' => [
        //                             'visible' => true,
        //                             'text' => 'A bar chart is a horizontal column chart. Compared with the basic bar chart, the classification text of the bar chart can be arranged horizontally, so it is suitable for scenarios with many categories.',
        //                         ],
        //                         'smooth' => false,
        //                         'xField' => 'year',
        //                         'yField' => 'value'
        //                     ];
        //                 })
        //         ));
        //     });
        // return $content;
    }
}

