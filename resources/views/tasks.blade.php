@extends('layouts.app')

@section('content')
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<body>

<!-- Nav -->
<nav class="navbar navbar-inverse">
    <div class='container'>
      <span class="navbar-brand">To Do List For You ! {{ Auth::user()->name }}</span>
    </div>
  </nav>



  <!-- Main -->
  <div class="main container rounded p-3 mt-3">
    <form class="form-group mb-5">
      <input type="text" id="input" class="form-control mb-2" placeholder="What you have to do?">
      <label for="#input"><em>Press <code>Enter</code> to save</em></label>

<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
    <p>Welcome Back user :: {{ Auth::user()->name }}

        here you have a list of tasks that you must done , do your best ! (: </p>
    <a href="#" rel="modal:close">Close</a>
  </div>

  <!-- Link to open the modal -->
  <p><a href="#ex1" rel="modal:open" style="font-weight: bold">Click Here !</a></p>

    </form>
    <div class="cards">
      <div class="card">
        <div class="card-block">
          <button id="delete" type="button" class="btn btn-link float-right">❌</button>
          <button id="done" type="button" class="btn btn-link float-right mr-3">✔️</button>
          <p class="card-title lead">Test the hole app</p>
        </div>
      </div>
      <div class="card">
        <div class="card-block">
          <button id="delete" type="button" class="btn btn-link float-right">❌</button>
          <button id="done" type="button" class="btn btn-link float-right mr-3">✔️</button>
          <del><p class="card-title lead">Write HTML in my JavaScript</p></del>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
        <a href="" onclick="localStorage.removeItem('cards')">🔴&nbsp;Reset</a>
    </div>

<h3> NRA Company </h3>

  </footer>

<style>



html {
  position: relative;
  min-height: 100vh;
  font-size: 16px;
}

body {
  height: 100%;
  margin-bottom: 60px;
  background: linear-gradient(to bottom, #8e9eab, #eef2f3);
  background-attachment: fixed;
  background-repeat: no-repeat;
}

body > .container {
  padding-top: 60px;
}

.navbar-brand {
  font-size: 2rem;
}

.main {
  background: rgba(255, 255, 255, 0.25);
  border: 1px solid whitesmoke;
}

input[type="text"] {
  font-size: 1.25rem;
  height: 3rem;
}

input[type="text"]:focus {
  border-color: gray;
}

label {
  color: white;
}

.card {
  background: whitesmoke;
}

.card {
 transition: border-color ease-in-out 150ms;
}

.card:hover {
  border: 1px solid gray;
}

.btn-link {
  transition: all 200ms ease-in-out;
}

.btn-link:hover {
  text-decoration: none;
  color: rgba(0, 0, 0, .75);
  cursor: pointer;
}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
  line-height: 60px;
  text-align: center;
}

.footer .container a {
  color: red;
  transition: all 200ms ease-in-out;
}

.footer .container a:hover {
  text-decoration: none;
  color: rgba(255, 0, 0, 0.75);
}
                                                        /* popup                                            */
                                                        .modal {
  top: -10px;
  right: -10px;
  width: 600px;
  height: 100px;
  color: rgb(0, 0, 0);
  line-height: 1.5;
  text-align: center;
  text-decoration: none;
  text-indent: 0;
  background: rgb(255, 255, 255);
  border: 5px solid #fff;
  -webkit-border-radius:  35px;
  -moz-border-radius:     35px;
  -o-border-radius:       35px;
  -ms-border-radius:      35px;
  -moz-box-shadow:    1px 1px 5px rgba(0,0,0,0.5);
  -webkit-box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
  box-shadow:         1px 1px 5px rgba(0,0,0,0.5);
  font-weight: bold;

}

</style>




<script>
// Remove the default cards if cards are present in the localStorage object
if (localStorage.cards) {
  $('.cards').children().remove();
  $('.cards').append(JSON.parse(localStorage.getItem('cards')));
}

// Delete the existing cards and add the new cards
// Simpler than pushing/splicing an array
const setStorage = () => {
  localStorage.removeItem('cards');
  localStorage.setItem('cards', JSON.stringify($('.cards').html()));
};

// Wrap or unwrap the card title in del tags for a strikeout effect
$('.cards').on('click', '#done', () => {
  if ($(event.target).next().is($('del'))) {
    $(event.target).next().children().unwrap();
    setStorage();
  } else {
    $(event.target).next().wrap('<del></del>');
    setStorage();
  }
});

// Delete the selected card and update localStorage
$('.cards').on('click', '#delete', () => {
  $(event.target).offsetParent().remove();
  setStorage();
});

// Append new card on submit and update localStorage
$('form').on('submit', (event) => {
  event.preventDefault();
  const title = $('input').val();
  const card = `
    <div class="card">
      <div class="card-block">
        <button id="done" type="button" class="btn btn-link float-right">❌</button>
        <button id="delete" type="button" class="btn btn-link float-right mr-3">✔️</button>
        <p class="card-title lead">${title}</p>
      </div>
    </div>
  `;
  $('.cards').append(card);
  // Reset the form input field
  $('form').trigger('reset');
  setStorage();
});


</script>

  @endsection

