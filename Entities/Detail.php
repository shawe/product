<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Detail extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['product_id', 'trn_no', 'stock_in', 'stock_out'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['product_id', 'trn_no'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_detail";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id');
        $this->fields->integer('product_id')->nullable()->html('text');
        $this->fields->integer('trn_no')->nullable()->html('text');
        $this->fields->integer('stock_in')->nullable()->html('text');
        $this->fields->integer('stock_out')->nullable()->html('text');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['product_id', 'trn_no', 'stock_in', 'stock_out'];
        $structure['filter'] = ['product_id', 'trn_no'];

        return $structure;
    }
}
