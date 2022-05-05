
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUserInfomationDetailsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("user_infomation_details", function (Blueprint $table) {

                $table->increments('id');
                $table->string('value');
                $table->integer('infomation_type_id')->nullable()->unsigned();
                $table->string('comment')->nullable();


                //*********************************
                // Foreign KEY [ Uncomment if you want to use!! ]
                //*********************************
                //$table->foreign("infomation_type_id")->references("id")->on("infomation_types");



                // ----------------------------------------------------
                // -- SELECT [user_infomation_details]--
                // ----------------------------------------------------
                // $query = DB::table("user_infomation_details")
                // ->leftJoin("infomation_types","infomation_types.id", "=", "user_infomation_details.infomation_type_id")
                // ->get();
                // dd($query); //For checking



            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists("user_infomation_details");
        }
    }
