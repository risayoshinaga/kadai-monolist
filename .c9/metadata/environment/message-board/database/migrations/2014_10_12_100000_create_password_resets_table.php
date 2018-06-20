{"filter":false,"title":"2014_10_12_100000_create_password_resets_table.php","tooltip":"/message-board/database/migrations/2014_10_12_100000_create_password_resets_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreatePasswordResetsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('password_resets', function (Blueprint $table) {","            $table->string('email')->index();","            $table->string('token');","            $table->timestamp('created_at')->nullable();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('password_resets');","    }","}",""],"id":1}]]},"ace":{"folds":[],"scrolltop":87.828125,"scrollleft":0,"selection":{"start":{"row":32,"column":0},"end":{"row":32,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1527480373383,"hash":"cf74b6d095392f221427da76c7d05f516b636c08"}