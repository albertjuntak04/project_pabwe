<?php 
  include 'header.php';
?>

<?php 
   $query=mysqli_query($db ,'select * from product');
?>

<div class=" container col-sm-12 " style="margin-bottom: 40px;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="foto/biskuit.jpg" alt="Gambar1" style="width: 100%; height: 400px;" alt="Produk1">
        <div class="carousel-caption">
          <h3>Sari Gandum</h3>
          <p>Rp. 50.000,00</p>
        </div>
      </div>

      <div class="item">
        <img src="foto/biskuit.jpg" style="width: 100%; height: 400px" alt="Produk2">
        <div class="carousel-caption">
          <h3>Sari Gandum</h3>
          <p>Rp. 50.000,00</p>
        </div>
      </div>

      <div class="item">
        <img src="foto/biskuit.jpg" style="width: 100%; height: 400px" alt="Produk3">
        <div class="carousel-caption">
          <h3>Sari Gandum</h3>
          <p>Rp. 50.000,00</p>
        </div>
      </div>

      <div class="item">
        <img src="foto/biskuit.jpg" style="width: 100%; height: 400px" alt="Produk4">
        <div class="carousel-caption">
          <h3>Sari Gandum</h3>
          <p>Rp. 50.000,00</p>
        </div>
      </div>

      <div class="item">
        <img src="foto/biskuit.jpg" style="width: 100%; height: 400px" alt="Produk5">
        <div class="carousel-caption">
          <h3>Sari Gandum</h3>
          <p>Rp. 50.000,00</p>
        </div>
      </div>

    </div>

    <!--  controls -->
    <a class="left carousel-control" href="#myCarousel " data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Prev</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div id="cart" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="jenis">Produk</h4>
      </div>
      <div class="modal-body">

        <div class="thumbnail">
          <img src="biskuit.jpg" alt="Produk">
          <div class="caption">
            <p id="jenis" style="font-size: 20px;">Sari Gandum</p>
            <p id="jenis">Produk ini merupakan makanan ringan berbahan dasar gandum</p>
            <h3 style="float: right;" id="jenis">Rp. 5.000</h3>


          </div>
        </div>

        <p>Jumlah Pesanan</p>
        <div class="btn-group " role="group" aria-label="..." style="margin-right: 10px; margin-top: 5px;">
          <button type="button" class="btn btn-warning"><img src="minus.svg" style="height: 20px; width: 20px; ""></a> </button>

            <button type=" button" class="btn btn-default" style="width: 40px; max-height: 35px;"><span>
              <p id="total">2</p>
            </span></button>

          <button type="button" class="btn btn-warning"><img src="add.svg" style="height: 20px; width: 20px; ""></a></button>
           
          </div>
          <button type=" button" class="btn btn-warning"
              style="float: right; width: 100px; font-weight: bold;">Beli</button>


        </div>

      </div>
    </div>
  </div>


  <div class="container">

    <div class="row">
      <div class="row">
        <p id="more"> Makanan dan Minuman</p>
        <p><a style="float: right; margin-right: 30px; margin-bottom: 10px;" href="#" class="btn btn-warning"
            role="button">Lihat Lebih</a></p>
      </div>

    </div>

    <?php
                $no=0;
               
                while ($data=mysqli_fetch_array($query)){
                $no++
            ?>
    <div class="col-sm-6 col-md-3">

      <div class="thumbnail">
      <img src="<?php echo $data["image"]; ?>" style="width:100%;">
        <div class="caption">
          <h3>Sari Gandum</h3>
          <p>Stok : 5</p>
          <p>Rp. 50.000</p>
          <p><a data-toggle="modal" data-target="#cart" class="btn btn-default" role="button" id="beli">Pesan</a></p>

        </div>
      </div>
    </div>

    <?php
                }
            ?>
    <div class="row">
      <div class="row">
        <p id="more"> Peralatan Mandi</p>
        <p><a style="float: right; margin-right: 30px; margin-bottom: 10px;" href="#" class="btn btn-warning"
            role="button">Lihat Lebih</a></p>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="foto/biskuit.jpg" alt="Produk">
          <div class="caption">
            <h3>Sari Gandum</h3>
            <h5>5</h5>
            <p>Rp. 50.000</p>
            <p><a data-toggle="modal" data-target="#cart" class="btn btn-default" role="button" id="beli">Pesan</a></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="foto/biskuit.jpg" alt="Produk">
          <div class="caption">
            <h3>Sari Gandum</h3>
            <h5>5</h5>
            <p>Rp. 50.000</p>
            <p><a data-toggle="modal" data-target="#cart" class="btn btn-default" role="button" id="beli">Pesan</a></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="foto/biskuit.jpg" alt="Produk">
          <div class="caption">
            <h3>Sari Gandum</h3>
            <h5>5</h5>
            <p>Rp. 50.000</p>
            <p><a data-toggle="modal" data-target="#cart" class="btn btn-default" role="button" id="beli">Pesan</a></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="foto/biskuit.jpg" alt="Produk">
          <div class="caption">
            <h3>Sari Gandum</h3>
            <h5>5</h5>
            <p>Rp. 50.000</p>
            <p><a data-toggle="modal" data-target="#cart" class="btn btn-default" role="button" id="beli">Pesan</a></p>
          </div>
        </div>
      </div>

    </div>


  </div>
  <br>
  <?php 
  include "footer.php";
?>