<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Category extends Model
{

    protected $fillable = ['name', 'parent'];
    protected $migrationOrder = 10;
    protected $table = "product_category";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->integer('parent')->default(0);
    }
}
