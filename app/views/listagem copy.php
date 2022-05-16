<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <title>Estoque</title>
    </head>
    <body>
        <header>
            <?php include_once('../../resources/layout/header.php'); ?>
        </header>
        <main>
            <div class="container mt-5 position-relative">
                <div class="row justify-content-between">
                    <div class="col">
                        <h2>GESTÃO DE ESTOQUE</h2>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <button>Novo</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-reponsible table-light table-striped">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                REAGENTE
                            </th>
                            <th>
                                LOTE
                            </th>
                            <th>
                                FABRICANTE
                            </th>
                            <th>
                                FABRICAÇÃO
                            </th>
                            <th>
                                VALIDADE
                            </th>
                            <th>
                                QNTD
                            </th>
                            <th>
                                EMBALAGEM ORIGINAL
                            </th>
                            <th>
                                CAS
                            </th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Acetonofalato de celulose</td>
                            <td>1507006</td>
                            <td>AUDAX</td>
                            <td>10/2015</td>
                            <td>10/2018</td>
                            <td>200g</td>
                            <td>Sim</td>
                            <td>9004-38-0</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>