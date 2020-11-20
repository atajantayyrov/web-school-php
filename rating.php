<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/mdb.min.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Web School - Rating</title>
  </head>
  <body>
    <?php include 'web-parts/header.php'; ?>
    <main class="main" id="rating">
        <div class="d-none" :class="{'d-block': user == true }">
            <div class="tf-container py-5 mt-5" v-if="user == true">
                <h1 class="h1-responsive text-center"><strong>TMF Developer Rating</strong></h1>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">TMF Web</th>
                            <th scope="col">Book</th>
                            <th scope="col">Tjn Web</th>
                            <th scope="col">Git</th>
                            <th scope="col">Randomizer</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(ratings, index) in ratingData" :key="ratings.name">
                                <td>{{ index + 1 }}</td>
                                <td>{{ ratings.name }}</td>
                                <td>{{ ratings.tmf }}</td>
                                <td>{{ ratings.book }}</td>
                                <td>{{ ratings.tjn }}</td>
                                <td>{{ ratings.git }}</td>
                                <td>{{ ratings.randomizer }}</td>
                                <td><strong>{{ ratings.tmf + ratings.book + ratings.git + ratings.tjn + ratings.randomizer}}<strong></td>
                                <!-- <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="my-5 py-5" v-if="user == false">
            <div class="tf-container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-6">
                        <h2 class="h2-responsive"><strong>Please Login First!</strong></h2>
                        <div class="md-form">
                            <input type="text" id="form1" class="form-control" v-model="inputtedPassword">
                            <label for="form1">Password</label>
                        </div>
                        <button class="btn btn-elegant" id="passwordCheck" @click="checkPassword()">Enter</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'web-parts/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/front-page.js?v=<?php echo filemtime('js/front-page.js'); ?>"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap/mdb.min.js"></script>
    <script src="js/vue.min.js"></script>
    <script src="js/rating.js?v=<?php echo filemtime('js/rating.js'); ?>"></script>    
  </body>
</html>