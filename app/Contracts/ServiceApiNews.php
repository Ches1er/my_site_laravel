<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 19.07.2019
 * Time: 16:04
 */

namespace App\Contracts;


use PhpParser\Node\Expr\Array_;

interface ServiceApiNews
{
    public function showAllNews();
    public function showNews(string $sales_area);
    public function showFindedNews(string $findData);
    public function addNews(Array $data);
    public function delNews(int $id);
}
