    <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

        body { 
        margin: 0;
        box-sizing: border-box;
        }
        .intro {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 520px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("<?php echo base_url('image/1.jpeg') ?>");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }

        .intro h1 {
        font-family: sans-serif;
        font-size: 60px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
        }

        .intro p {
        font-size: 20px;
        color: #d1d1d1;
        text-transform: uppercase;
        margin: 20px 0;
        }

        .intro button {
        background-color: #83979b;
        color: rgba(0, 0, 0, 0.158);
        padding: 10px 25px;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
        }
    </style>

<body>
  <main>
    <div class="intro">
      <p style = "font-family:'Courier New', Courier, monospace ;"><h1>Manajemen  Informatika</h1> </p>
      <p>Sering dianggap remeh, padahal iya</p>
      <button>Inilah Kami</button>
    </div>
  </main>
  <div class="wrapper">
    <div class="container">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="row">
                     <div class="col-sm-6">
                        <h4>Daftar Mahasiwa dan Mahasiswi MI :)</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <!-- <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li> -->
                            <li class="breadcrumb-item active">
                                MIClass 2021-2024 M
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <table class="table table-bordered table-hover">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>ID</th>
                                    <th>NIM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <?php
                                    foreach($sample as $row)
                                    {
                                ?>
                                    <tr>
                                        <td align="center"><?php echo $row->id ?></td>
                                        <td align="center"><?php echo $row->nim ?></td>
                                        <td><?php echo $row->namaLengkap ?></td>
                                        <td><?php echo $row->alamat ?></td>    
                                        <td><?php echo $row->email ?></td>    
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </section>
        </div>
    </div>
  </div>
</body>