
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateFamilyRelationsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("family_relations", function (Blueprint $table) {

						$table->increments('parent_id')->unsigned();
						$table->integer('child_id')->nullable()->unsigned();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        //$table->foreign("parent_id")->references("id")->on("users");
						//$table->foreign("child_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [family_relations]--
						// ----------------------------------------------------
						// $query = DB::table("family_relations")
						// ->leftJoin("users","users.id", "=", "family_relations.parent_id")
						// ->leftJoin("users","users.id", "=", "family_relations.child_id")
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
                Schema::dropIfExists("family_relations");
            }
        }
    