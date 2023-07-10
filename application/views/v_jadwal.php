    <style>
        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 300;
            line-height: 1.42em;
            color:#A7A1AE;
            background-color:#1F2739;
        }

        h1 {
            font-size:3em; 
            font-weight: 300;
            line-height:1em;
            text-align: center;
            color: #4DC3FA;
        }

        h2 {
            font-size:1em; 
            font-weight: 300;
            text-align: center;
            display: block;
            line-height:1em;
            padding-bottom: 2em;
            color: #FB667A;
        }

        h2 a {
            font-weight: 700;
            text-transform: uppercase;
            color: #FB667A;
            text-decoration: none;
        }

        .blue { color: #185875; }
        .yellow { color: #FFF842; }

        .containerra th h1 {
            font-weight: bold;
            font-size: 1em;
            text-align: left;
            color: #185875;
        }

        .containerra td {
            font-weight: normal;
            font-size: 1em;
            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
            -moz-box-shadow: 0 2px 2px -2px #0E1119;
            box-shadow: 0 2px 2px -2px #0E1119;
        }

        .containerra {
            text-align: left;
            overflow: hidden;
            width: 92%;
            margin: 0 auto;
            display: table;
            padding: 0 0 8em 0;
        }

        .containerra td, .containerra th {
            padding-bottom: 2%;
            padding-top: 2%;
            padding-left:2%;  
        }

        /* Background-color of the odd rows */
        .containerra tr:nth-child(odd) {
            background-color: #323C50;
        }

        /* Background-color of the even rows */
        .containerra tr:nth-child(even) {
            background-color: #2C3446;
        }

        .containerra th {
            background-color: #1F2739;
        }

        .containerra td:first-child { color: #FB667A; }

        .containerra tr:hover {
            background-color: #464A52;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
        }

        .containerra td:hover {
            background-color: #FFF842;
            color: #403E10;
            font-weight: bold;
        
            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);
        
            transition-delay: 0s;
            transition-duration: 0.4s;
            transition-property: all;
            transition-timing-function: line;
        }

        @media (max-width: 800px) {
            .containerra td:nth-child(4),
            .containerra th:nth-child(4) { display: none; }
        }
	</style>
<body>
	<!-- <h1><span class="yellow">Jadwal Mata Kuliah</pan></h1> -->
    <div class="wrapper">
        <div class="container">
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                 <h1><span class="yellow">Jadwal Mata Kuliah MI 2022-2023 M</span></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                            <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Schedule
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <table class="containerra">
                        <thead>
                            <tr>
                                <th><h1>Hari</h1></th>
                                <th><h1>Nama Matkul</h1></th>
                                <th><h1>Nama Dosen</h1></th>
                                <th><h1>Ruangan</h1></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Selasa</td>
                                <td>Pendidikan Pancasila</td>
                                <td>Yasir Muharram Fauzi, SHI, ME.Sy</td>
                                <td>Lab Jaringan</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>KPAM IV</td>
                                <td>M. Furqon, M.kom</td>
                                <td>A210</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>Bahasa Indonesia</td>
                                <td>Dr. Aty Susanti, S.S., M.Pd</td>
                                <td>B303</td>
                            </tr>
                        <tr>
                                <td>Rabu</td>
                                <td>Manajemen Bisnis</td>
                                <td>Agi Dicko Permardi, S.E., M.M</td>
                                <td>A211</td>
                            </tr>
                        <tr>
                                <td>Rabu</td>
                                <td>KPAM IV</td>
                                <td>M Furqon, M.Kom</td>
                                <td>A211</td>
                            </tr>
                        <tr>
                                <td>Kamis</td>
                                <td>Multimedia II</td>
                                <td>Ricky Rohmanto, M.Kom</td>
                                <td>B303</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>Pendidikan Agama Islam I</td>
                                <td>Asep Abdul Halim, S.Sos.I, M.M</td>
                                <td>A212</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>Rekayasa Sistem Informasi</td>
                                <td>Dwi Atmoko, M.Kom</td>
                                <td>A211</td>
                            </tr>
                            <tr>
                                <td>Jum'at</td>
                                <td>English Comunication Skill</td>
                                <td>Ronny Andreas Lakani, S.S., M.M</td>
                                <td>A211</td>
                            </tr>
                            <tr>
                                <td>Jum'at</td>
                                <td>Pemrog. WEB</td>
                                <td>Ridwan Zulkifli, S.T, M.Kom</td>
                                <td>B301</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <br>
            </div>
        </div>
    </div>  
</body>