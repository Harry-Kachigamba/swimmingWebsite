<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //up() if for applying and creating changes to the database!(Creating, modifying,adding)
    public function up(): void
    {
        Schema::create('swimming_sites', function (Blueprint $table) {
            $table->id('SiteId');
            $table->string('SiteName');
            $table->text('SiteDescription');
            $table->text('SiteLocation')->nullable();
            $table->string('SiteContacts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //down() is for reversing changes from the database!(dropping, removing, undo)
    public function down(): void
    {
        Schema::dropIfExistst('swimming_sites');
    }
};
