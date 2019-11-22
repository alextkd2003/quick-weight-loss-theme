<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package quick-weight-loss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Oswald&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid">
    <header class="row py-5" id="main">
      <div class="col-12 col-md-6">
        <form class="text-white">
            <h3 class="mb-4 text-center">Start Now & Save 50%</h3>
            <div class="row">
              <div class="col text-center">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" placeholder="First Name">
              </div>
              <div class="col text-center">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col text-center">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="col text-center">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Phone">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col text-center">
                <label for="zipcode">Zipcode</label>
                <input type="number" class="form-control" id="zipcode" placeholder="Zipcode">
              </div>
            </div>

            <div class="form-inline justify-content-around mt-4">
              <div class="form-group flex-column text-center">
                <label for="date">Select Date</label>
                <input type="date" class="form-control" id="date">
              </div>
              <div class="form-group flex-column text-center">
                <label for="time">Select time</label>
                <input type="time" class="form-control" id="time">
              </div>
            </div>

            <div class="form-inline justify-content-around mt-4">
              <div class="form-group flex-column text-center w-100">
                <label for="date">How Did you Hear About Us?</label>
                <select class="form-control w-100" id="exampleFormControlSelect1">
                    <option>TV</option>
                    <option>Radio</option>
                    <option>Social Media</option>
                    <option>Others</option>
                </select>
              </div>
            </div>

            <div class="form-inline justify-content-around mt-4">
              <div class="form-group flex-column text-center w-100">
                <button class="btn btn-block btn-book">BOOK IN-CENTER CONSULTATION</button>
              </div>
            </div>

        </form>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img class="img-fluid" src="https://quickweightloss.net/wp-content/uploads/2019/11/NYR-GIRL-UPDATE.png" alt="New Year Revolution" class="img-fluid">
      </div>
    </header>

