!! extends layouts/template-pmint-docs !!
!! block content !! 
  <div class="wrapper">
    <aside class="doc__nav">
      <ul>
        <li class="js-btn selected">Pengenalan & Instalasi</li>
        <li class="js-btn">Routing System</li>
        <li class="js-btn">View & Templating</li>
        <li class="js-btn">Controller</li>
      </ul>
    </aside>
    <article class="doc__content">
      <section class="js-section">

        <h3 class="section__title">Pengenalan</h3>
        <p>Pandoracode Mint adalah sebuah <b>Framework PHP Mini</b> yang dibangun untuk kerja solo maupun tim, <br> kami memanfaatkan beberapa <code>library</code> yang sudah ada, terlebih Anda bisa menambahkan<code>library</code> baru sesuai dengan keinginan Anda.</p>
        <h3 class="section__title">Instalasi</h3>        

        <p><span style="color:red">*</span>Pastikan laptop/PC Anda sudah terinstall composer, jika belum bisa download <a target="_blank" href="https://getcomposer.org/download/">disini</a>.</p>

        <p>Buka Command Prompt kemudian ketikan perintah berikut : </p>

        !! code html : composer create-project pandoradev/pandoracode-mint nama-project !!

        <p>Jika proses sudah selesai, kemudian pindah ke direktory project Anda.</p>

        !! code html : cd nama-project !!

        <p>Jika anda ingin menjalankan Pandoracode Mint secara langsung, Anda dapat menuliskan command berikut :</p>

        !! code html : php pcode run !!

        <p>Kemudian ketik di URL Anda <b>localhost:8080</b></p>

      </section>
      <section class="js-section">
        <h3 class="section__title">Routing System</h3>
        <p>
          Mendefinisikan rute untuk antarmuka web Anda, ringan, dan sangat cepat untuk proyek PHP. <br>
          Kami menggunakan <code>library : miladrahimi/phprouter</code>.<br><br>
          Contoh penggunaan di file <code>routes/web.php</code> :
        </p>

        !! code php : $router->get('/', function () {
    echo 'This is Pandoracode Mint!';
}); !!
        <h4>Route Controller</h4>

        <p>Jika ingin terintegrasi dengan controller Anda bisa membuat code seperti contoh di bawah ini.</p>

        !! code php : $router->get('url', [<b class="controller-name">NamaController</b>::class, 'nama_method']); !!

        <h4>Route Paramter</h4>
        <p>Mungkin Anda perlu mengambil ID dari URL. Anda dapat melakukannya dengan menentukan parameter rute</p>

      !! code php : $router->get('/post/{id}', function ($id) {
    echo "id nya adalah $id";
}); !!
        
        <hr />
      </section>
      <section class="js-section">
        <h3 class="section__title">View & Templating</h3>
        <p>Bagaimana cara membuat sebuah tampilan/view baru pada Pandoracode Mint? <br>
        Sebelum ke pembuatan view, Pandoracode Mint menempatkan lokasi tampilan/view di direktori <code>resources/views</code>. <br>
        Ada dua versi cara pembuatan view (manual dan CLI).</p>

        <h4>Pembuatan View</h4>

        <p>Untuk versi CLI kami menyediakan dua bentuk command, yang mana dari tiap perintah mempunyai fungsi yang berbeda, <br>
          seperti ini contoh nya :</p>

        <h4>Satu file view</h4>

        !! code html : php pcode make:view nama_view !!

        Akan otomatis membuat sebuah file baru (.php) di dalam <code>resources/views</code> sesuai dengan nama view Anda. <br>

        <ul class="file-tree">
            <li class="folder-root open"><a style="margin-left: 7px;"> views</a>
                <ul>
                    <li><a>nama_view.php</a> </li>
                </ul>
            </li>
        </ul>

        <h4>View dalam folder</h4>

        !! code html : php pcode make:view nama-folder/nama_view !!

        <p>Akan otomatis membuat sebuah file baru (.php) di dalam <code>resources/views</code> sesuai dengan nama folder dan view Anda.</p>

        <ul class="file-tree">
            <li class="folder-root open"><a style="margin-left: 7px;"> views</a>
                <ul>
                    <li class="folder-root open">
                        <a style="margin-left: 7px;"> nama-folder</a>
                        <ul>
                            <li><a>nama_view.php</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <br>

        <h4>Trinity file view</h4>

        !! code html : php pcode make:view nama-folder --full !!

        <p>Akan otomatis membuat sebuah folder baru di dalam <code>resources/views</code> sesuai dengan nama folder Anda, dan juga membuat 3 file di dalamnya </p>

        <ul class="file-tree">
            <li class="folder-root open"><a style="margin-left: 7px;"> views</a>
                <ul>
                    <li class="folder-root open">
                        <a style="margin-left: 7px;"> nama-folder</a>
                        <ul>
                            <li><a>data.php</a> </li>
                            <li><a>form-edit.php</a> </li>
                            <li><a>form.php</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul><br>

        <h4>Templating view</h4>

        <p>Apa itu templating view dan bagaimana cara penggunaan nya? <br> Sebelum lanjut, kita perlu memahami arti kata template dalam bidang ilmu komputer ialah : </p>

        <p><i class="quote">"Sebuah dokumen atau file yang memiliki format preset, digunakan sebagai titik awal untuk aplikasi tertentu sehingga format tidak harus diciptakan kembali setiap kali digunakan"</i></p>

        <p>Jadi pengertian yang sangat umum dari desain template adalah pola layout dari sebuah website yang ingin didesain dan disiapkan dengan berbagai fitur, content suatu bidang di dalamnya. Kita juga bisa merubah serta mengedit serta mengembangkan kembali dari desain yang di rencanakan.</p>
        
        <h4>Membuat templating</h4>
        <p>Pun ada dua cara pembuatan templating, manual dan CLI. </p>

        !! code php : php pcode make:layout template!!

        <p>Akan otomatis membuat sebuah file baru (.php) di dalam <code>resources/layouts</code> sesuai dengan nama template Anda.</p>

        <ul class="file-tree">
            <li class="folder-root open"><a style="margin-left: 7px;"> layouts</a>
                <ul>
                    <li><a>template.php</a> </li>
                </ul>
            </li>
        </ul><br>

        <p>Kemudian untuk template engine nya seperti ini.</p>

        !! code html : <?php echo htmlspecialchars(file_get_contents('resources/views/component/template.php')) ?> !!

        <p>Sekarang kita mencoba menggunakan template yang sudah kita buat, misalnya kita punya file di direktori <code>resources/views</code> dengan nama <br>test.php, buat isi file tersebut menjadi seperti ini :</p>

        !! code html : <?php echo htmlspecialchars(file_get_contents('resources/views/component/test.php')) ?> !!
        
        <p>Kemudian silahkan Anda coba untuk menjalakan project anda di browser.</p>

        <hr />

      </section>
      <section class="js-section">
        
        <h3 class="section__title">Controller</h3>
        <p>Controller merupakan program yang mengatur, menerima input dan menjalankan beberapa perintah untuk dijalankan. <br>Bisa juga mengambil hasil olahan dan menatanya di bagian view.</p>

        <h4>Pembuatan Controller</h4>
        <p>Sebelum ke pembuatan controller, Pandoracode Mint menempatkan lokasi controller di direktori <code>controllers</code>. <br>Berikut beberapa cara pembuatan controller :</p>

        <h4>Standart</h4>

        !! code php : php pcode make:controller Test !!

        <p>Akan otomatis membuat sebuah file baru (.php) di dalam <code>controllers</code> sesuai dengan nama controller Anda. </p>

        <ul class="file-tree">
            <li class="folder-root open"><a style="margin-left: 7px;"> controllers</a>
                <ul>
                    <li><a>Test.php</a> </li>
                </ul>
            </li>
        </ul>
        <div class="directory"> <i class="fa fa-folder"></i> controllers/Test.php</div>
        !! code php : &#60;?php

  namespace Controllers;

  use QB;
  use Rakit\Validation\Validator;
  use Laminas\Diactoros\ServerRequest AS Request;

  class Test
  {

      public function index()
      {
          echo 'This is index';
      }

  } !!

        <h4>Auto setup router & method</h4>

        !! code html : php pcode make:controller Test --full !!

        <p>Akan otomatis membuat sebuah file baru (.php) di dalam <code>controllers</code> sesuai dengan nama controller Anda dan juga setup <br> <code>routes/web.php</code> untuk semua request beserta menyiapkan method-method di controller Anda </p>
        <div class="directory"> <i class="fa fa-folder"></i> controllers/Test.php</div>
        !! code php : &#60;?php
        
  namespace Controllers;

  use QB;
  use Rakit\Validation\Validator;
  use Laminas\Diactoros\ServerRequest AS Request;

  class Test
  {

      public function index()
      {
          echo 'This is index';
      }

      public function create()
      {
          //code
      }

      public function store(Request $request)
      {
          //code
      }

      public function edit($id)
      {
          //code
      }

      public function update(Request $request, $id)
      {
          //code
      }

      public function delete($id)
      {
          //code
      }

  } !!

                <div class="directory"> <i class="fa fa-folder"></i> routes/web.php</div>
!! code php : $router->get('test',[Controllers\Test::class,'index']);
$router->get('create-test',[Controllers\Test::class,'create']);
$router->post('store-test',[Controllers\Test::class,'store']);
$router->get('edit-test/{id}',[Controllers\Test::class,'edit']);
$router->post('update-test/{id}',[Controllers\Test::class,'update']);
$router->get('delete-test/{id}',[Controllers\Test::class,'delete']);!!

                <h4>Super controller</h4>

                !! code html : php pcode make:controller Test --super !!

                <p>Tidak jauh berbeda dengan controller sebelumnya, hanya saja jika Anda menggunakan <code>--super</code> akan ada tambahan sample <code>query</code> disetiap method. </p>
                <div class="directory"> <i class="fa fa-folder"></i> controllers/Test.php</div>

                !! code php : &#60;?php 

  namespace Controllers;

  use QB;
  use Rakit\Validation\Validator;
  use Laminas\Diactoros\ServerRequest AS Request;

  class Test
  {

      public function index()
      {

          $data = QB::table('table_name')->get();

          view('path/data', compact('data'));

      }

      public function create()
      {

          view('path/form');

      }

      public function store(Request $request)
      {

          QB::table('table_name')->insert([

              'column' => $request->data

          ]);

          redirect('url');

      }

      public function edit($id)
      {

          $data = QB::table('table_name')->where('id', $id)->first();

          view('path/data', compact('data'));

      }

      public function update(Request $request, $id)
      {

          QB::table('table_name')->where('id', $id)->update([

                'column' => $request->data

          ]);

          redirect('url');

      }

      public function delete($id)
      {

          QB::table('table_name')->where('id', $id)->delete();

          redirect('url');

      }

  } !! <br>

          <p>Untuk bagian <code>routes/web.php</code> ada sedikit perubahan jika Anda menggunakan <code>--super</code></p>

          !! code php : $router->resource('test',Controllers\Test::class); !!

          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>URL</th>
                      <th>Target</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>test</td>
                      <td>Controllers\Test::class, <b>'index'</b> </td>
                  </tr>
                  <tr>
                      <td>create-test</td>
                      <td>Controllers\Test::class, <b>'create'</b> </td>
                  </tr>
                  <tr>
                      <td>store-test</td>
                      <td>Controllers\Test::class, <b>'store'</b> </td>
                  </tr>
                  <tr>
                      <td>edit-test/{id}</td>
                      <td>Controllers\Test::class, <b>'edit'</b> </td>
                  </tr>
                  <tr>
                      <td>update-test/{id}</td>
                      <td>Controllers\Test::class, <b>'update'</b> </td>
                  </tr>
                  <tr>
                      <td>delete-test/{id}</td>
                      <td>Controllers\Test::class, <b>'delete'</b> </td>
                  </tr>
              </tbody>
          </table>

          <hr />
        
      </section>
    </article>
  </div>

!! endblock !!