<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateHcGalleriesResourcesConnectionsTable
 */
class CreateHcGalleriesResourcesConnectionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('hc_galleries_resources_connections', function (Blueprint $table) {
            $table->integer('count', true);
            $table->timestamps();
            $table->string('gallery_id', 36)
                ->index('fk_hc_galleries_resources_connections_hc_galleries1_idx');
            $table->string('resource_id', 36)
                ->index('fk_hc_galleries_resources_connections_hc_resources1_idx');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('hc_galleries_resources_connections');
    }

}
