@extends('layout')
@section('judul')
Hello
@endsection
@section('konten')
<form method="POST" action="{{ url('daftar') }}">
{{csrf_field()}}
<div class="page-container">
  <ul class="tabs mtop40">
    <li>
      <input type="radio" name="tabs" id="tab1" checked />
      <label for="tab1">Controler</label>
      <div id="tab-content1" class="tab-content">
          <pre>
			<code class="language-markup">
				namespace App\Http\Controllers;
				use Illuminate\Http\Request;
				use App\Http\Requests;
				use App\Daftar;
				class Menu extends Controller
				{
    				public function index($value='')
    				{
    					$data = Daftar::all();
        				return view('tampilan.home')->with('data', $data);
    				}
    			
    				public function store(Request $request)
    				{
       					Daftar::create($request->all());
       					return redirect('daftar');
    				}
    			
					public function selesai($id)
    				{
    					$kirim = array( 
							"status"			=> "selesai",
						);
    					$update = \App\Daftar::where('no', $id)->update($kirim);
    					return redirect('daftar');
    				}    
    			
				    public function hapus($id)
    				{
    					$update = \App\Daftar::where('no', $id)->delete();
    					return redirect('daftar');
    				}    
				}
			</code>
  		   </pre>
  	   </div>
    </li>
	<li>
    	<input type="radio" name="tabs" id="tab2"/>
    	<label for="tab2">Routes</label>
    	<div id="tab-content2" class="tab-content" style="width:100%">
    		<pre>
    			<code class="language-javascript">
				  	Route::get('/', function () {
    					return view('welcome');
					});

					Route::get('selesai/{param}','Menu@selesai');
					Route::get('hapus/{param}','Menu@hapus');
					Route::get('/code', function () {
    					return view('code');
					});
					Route::resource('daftar', 'Menu');
  				</code>
  			</pre>
  		</div>
  	</li>

	<li>
  		<input type="radio" name="tabs" id="tab4" />
    	<label for="tab4">Data Base</label>
    	<div id="tab-content4" class="tab-content">
    		<pre>
			    <code class="language-javascript">
					use Illuminate\Database\Schema\Blueprint;
					use Illuminate\Database\Migrations\Migration;

					class Kegiatan extends Migration
					{
    					public function up()
    						{
						        Schema::create('daftar', function (Blueprint $table) {
						            $table->increments('no')->unique();
						            $table->string('data');
						            $table->string('deadline');
						            $table->string('status');
						            $table->timestamps();
						        });
    						}

						    public function down()
						    {
						        Schema::drop('daftar');
						    }
						}

  				</code>
			</pre>
  		</div>
  	</li>
  </ul>
</div>
@endsection