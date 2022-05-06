
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUserProfileDetailsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("user_profile_details", function (Blueprint $table) {

                $table->increments('id');
                $table->string('value');
                $table->integer('profile_type_id')->nullable()->unsigned();
                $table->string('comment')->nullable();
                $table->timestamps();


                //*********************************
                // Foreign KEY [ Uncomment if you want to use!! ]
                //*********************************
                $table->foreign("profile_type_id")->references("id")->on("profile_types");



                // ----------------------------------------------------
                // -- SELECT [user_profile_details]--
                // ----------------------------------------------------
                // $query = DB::table("user_profile_details")
                // ->leftJoin("profile_types","profile_types.id", "=", "user_profile_details.profile_type_id")
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
            Schema::dropIfExists("user_profile_details");
        }
    }
