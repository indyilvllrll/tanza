<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD SECTION -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Preconnect to Google Fonts for improved performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Importing Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Great+Vibes&family=Lustria&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Deferred JavaScript Execution -->
  <script src="accommodations.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">
    <!-- Header Section -->
    <header>
    <?php include_once 'nav.php'; ?>

    </header>


<style>

    .visuallyhidden {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px; }

    body {
      font-family: 'Open Sans', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      margin: 0;
      font-weight: 600; }

    .button {
      color: #ffffff;
      background-color: #24cf5f;
      padding: 12px 25px;
      font-size: 12px;
      letter-spacing: 1px;
      text-transform: uppercase;
      border: 0;
      border-radius: 2px;
      outline: 0;
      box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.2);
      transition: all .2s; }
      .button:hover, .button:active, .button:focus {
        -ms-transform: scale(1.1);
            transform: scale(1.1); }

    .button--transparent {
      background: transparent;
      border: 0;
      outline: 0; }

    .button--close {
      position: absolute;
      top: 10px;
      left: 10px;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
          align-items: center;
      -ms-flex-pack: center;
          justify-content: center;
      width: 30px;
      height: 30px;
      color: #ffffff;
      border-radius: 50%;
      transition: all .25s;
      z-index: 10; }
      .button--close svg {
        width: 20px;
        height: 20px; }
        .button--close svg * {
          fill: currentColor; }
      .button--close:hover, .button--close:active, .button--close:focus {
        color: #fbcf34;
        background-color: #ffffff;
        box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1); }

    .button--info {
      position: absolute;
      top: 0;
      right: 0; }

    input {
      width: calc(100% - 10px);
      min-height: 30px;
      padding-left: 5px;
      padding-right: 5px;
      letter-spacing: .5px;
      border: 0;
      border-bottom: 2px solid #f0f0f0; }
      input:valid {
        border-color: #24cf5f; }
      input:focus {
        outline: none;
        border-color: #fbcf34; }

    .form-list {
      padding-left: 0;
      list-style: none; }
      .form-list__row {
        margin-bottom: 25px; }
        .form-list__row label {
          position: relative;
          display: block;
          text-transform: uppercase;
          font-weight: 600;
          font-size: 15px;
          letter-spacing: .5px;
          }
        .form-list__row--inline {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-pack: justify;
              justify-content: space-between; }
          .form-list__row--inline > :first-child {
            -ms-flex: 2;
                flex: 2;
            padding-right: 20px; }
          .form-list__row--inline > :nth-child(2n) {
            -ms-flex: 1;
                flex: 1; }
      .form-list__input-inline {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
            justify-content: space-between; }
        .form-list__input-inline > * {
          width: calc(50% - 10px - 10px); }
      .form-list__row--agree {
        margin-top: 30px;
        margin-bottom: 30px;
        font-size: 15px; }
        .form-list__row--agree label {
          font-weight: 400;
          text-transform: none;
          color: #676767; }
        .form-list__row--agree input {
          width: auto;
          margin-right: 5px; }

    #input--cc {
      position: relative;
      padding-top: 6px; }
      #input--cc input {
        padding-left: 46px;
        width: calc(100% - 46px); }
      #input--cc:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 36px;
        height: 45px;
        background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20glyph%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%20%3Cpath%20data-color%3D%22color-2%22%20fill%3D%22%238c8c8c%22%20d%3D%22M47%2C16V9c0-1.105-0.895-2-2-2H3C1.895%2C7%2C1%2C7.895%2C1%2C9v7H47z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%238c8c8c%22%20d%3D%22M1%2C22v17c0%2C1.105%2C0.895%2C2%2C2%2C2h42c1.105%2C0%2C2-0.895%2C2-2V22H1z%20M18%2C33H8c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h10%20c0.552%2C0%2C1%2C0.448%2C1%2C1S18.552%2C33%2C18%2C33z%20M40%2C33h-5c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h5c0.552%2C0%2C1%2C0.448%2C1%2C1S40.552%2C33%2C40%2C33z%22%3E%3C/path%3E%20%3C/g%3E%3C/svg%3E");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 36px;
        -ms-transform: translateY(-50%);
            transform: translateY(-50%); }

    #input--cc.creditcard-icon--visa:before {
      background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Crect%20x%3D%221%22%20y%3D%2214%22%20fill%3D%22%23E6E6E6%22%20width%3D%2246%22%20height%3D%2219%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23E79800%22%20d%3D%22M4%2C41h40c1.657%2C0%2C3-1.343%2C3-3v-5H1v5C1%2C39.657%2C2.343%2C41%2C4%2C41z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v5h46v-5C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%231A1876%22%20points%3D%2219.238%2C28.8%2021.847%2C28.8%2023.48%2C19.224%2020.87%2C19.224%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M28.743%2C23.069c-0.912-0.443-1.471-0.739-1.465-1.187c0-0.398%2C0.473-0.824%2C1.495-0.824%20c0.836-0.013%2C1.51%2C0.157%2C2.188%2C0.477l0.354-2.076c-0.517-0.194-1.327-0.402-2.339-0.402c-2.579%2C0-4.396%2C1.299-4.411%2C3.16%20c-0.015%2C1.376%2C1.297%2C2.144%2C2.287%2C2.602c1.016%2C0.469%2C1.358%2C0.769%2C1.353%2C1.188c-0.006%2C0.642-0.811%2C0.935-1.562%2C0.935%20c-1.158%2C0-1.742-0.179-2.793-0.655l-0.366%2C2.144c0.61%2C0.267%2C1.737%2C0.499%2C2.908%2C0.511c2.744%2C0%2C4.525-1.284%2C4.545-3.272%20C30.944%2C24.581%2C30.249%2C23.752%2C28.743%2C23.069z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M38.007%2C19.233H35.99c-0.625%2C0-1.092%2C0.171-1.367%2C0.794l-3.876%2C8.776h2.741c0%2C0%2C0.448-1.18%2C0.55-1.439%20c0.3%2C0%2C2.962%2C0.004%2C3.343%2C0.004c0.078%2C0.335%2C0.318%2C1.435%2C0.318%2C1.435h2.422L38.007%2C19.233z%20M34.789%2C25.406%20c0.108-0.276%2C1.173-3.011%2C1.386-3.591c0.353%2C1.651%2C0.009%2C0.049%2C0.781%2C3.591H34.789z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M17.049%2C19.231l-2.556%2C6.53l-0.272-1.327l-0.915-4.401c-0.158-0.606-0.616-0.787-1.183-0.808H7.913%20L7.88%2C19.424c1.024%2C0.248%2C1.939%2C0.606%2C2.742%2C1.05l2.321%2C8.317l2.762-0.003l4.109-9.558H17.049z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E"); }

    #input--cc.creditcard-icon--master-card:before {
      background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23003564%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Ccircle%20fill%3D%22%23F01524%22%20cx%3D%2219%22%20cy%3D%2224%22%20r%3D%228%22%3E%3C/circle%3E%20%3Cpath%20fill%3D%22%23376BD1%22%20d%3D%22M24%2C30.24c0.093-0.075%2C0.177-0.161%2C0.267-0.24h-0.535C23.823%2C30.079%2C23.907%2C30.165%2C24%2C30.24z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FEB415%22%20d%3D%22M29%2C16c-2.525%2C0-4.773%2C1.173-6.24%2C3h2.48c0.251%2C0.313%2C0.47%2C0.651%2C0.673%2C1h-3.827h-0.008%20c-0.186%2C0.321-0.352%2C0.653-0.492%2C1h0.009h4.809c0.132%2C0.324%2C0.246%2C0.656%2C0.335%2C1h-5.477c-0.084%2C0.326-0.151%2C0.659-0.193%2C1h5.865%20C26.975%2C23.328%2C27%2C23.661%2C27%2C24h-6c0%2C0.339%2C0.028%2C0.672%2C0.069%2C1h5.865c-0.043%2C0.341-0.111%2C0.674-0.195%2C1h-5.477%20c0.088%2C0.342%2C0.194%2C0.677%2C0.325%2C1h0.009h4.809c-0.141%2C0.346-0.305%2C0.68-0.491%2C1h-3.827h-0.008c0.203%2C0.351%2C0.429%2C0.686%2C0.681%2C1h2.48%20c-0.292%2C0.363-0.623%2C0.693-0.973%2C1h-0.535h-0.012c1.409%2C1.241%2C3.254%2C2%2C5.279%2C2c4.418%2C0%2C8-3.582%2C8-8S33.418%2C16%2C29%2C16z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E"); }

    #input--cc.creditcard-icon--american-express:before {
      background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23007AC6%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M10.533%2C24.429h2.33l-1.165-2.857L10.533%2C24.429z%20M43%2C19h-5.969l-1.456%2C1.571L34.264%2C19H21.598l-1.165%2C2.571%20L19.268%2C19h-5.096v1.143L13.59%2C19H9.222L5%2C29h5.096l0.582-1.571h1.456L12.716%2C29h5.678v-1.143L18.831%2C29h2.912l0.437-1.286V29%20h11.648l1.456-1.571L36.594%2C29h5.969l-3.785-5L43%2C19z%20M25.383%2C27.571h-1.602V22l-2.475%2C5.571h-1.456L17.375%2C22v5.571h-3.349%20L13.444%2C26H9.95l-0.582%2C1.571H7.475l3.057-7.143h2.475l2.766%2C6.714v-6.714h2.766l2.184%2C4.857l2.038-4.857h2.766v7.143H25.383z%20M39.797%2C27.571h-2.184l-1.893-2.429l-2.184%2C2.429h-6.552v-7.143h6.697l2.038%2C2.286l2.184-2.286h2.038L36.739%2C24L39.797%2C27.571z%20M28.586%2C21.857v1.286h3.64v1.429h-3.64V26h4.077l1.893-2.143l-1.747-2H28.586z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E"); }

    #input--cc.creditcard-icon--discover:before {
      background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C23.807V10c0-1.657-1.343-3-3-3H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h10.589%20C30.229%2C38.811%2C43.003%2C30.094%2C47%2C23.807z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M25.029%2C21.013c-1.69%2C0-3.062%2C1.32-3.062%2C2.951c0%2C1.734%2C1.312%2C3.028%2C3.062%2C3.028%20c1.708%2C0%2C3.054-1.313%2C3.054-2.995C28.084%2C22.325%2C26.747%2C21.013%2C25.029%2C21.013z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M7.646%2C21.121H6v5.743h1.636c0.871%2C0%2C1.499-0.207%2C2.05-0.664c0.654-0.541%2C1.043-1.359%2C1.043-2.206%20C10.728%2C22.298%2C9.462%2C21.121%2C7.646%2C21.121z%20M8.956%2C25.434c-0.356%2C0.318-0.81%2C0.457-1.535%2C0.457H7.121v-3.798h0.301%20c0.725%2C0%2C1.161%2C0.13%2C1.535%2C0.464c0.385%2C0.345%2C0.617%2C0.878%2C0.617%2C1.429C9.573%2C24.539%2C9.342%2C25.091%2C8.956%2C25.434z%22%3E%3C/path%3E%20%3Crect%20x%3D%2211.245%22%20y%3D%2221.121%22%20fill%3D%22%23444444%22%20width%3D%221.116%22%20height%3D%225.743%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M15.102%2C23.322c-0.674-0.247-0.871-0.412-0.871-0.722c0-0.361%2C0.352-0.635%2C0.836-0.635%20c0.335%2C0%2C0.612%2C0.134%2C0.906%2C0.462l0.583-0.764c-0.481-0.424-1.058-0.638-1.686-0.638c-1.016%2C0-1.791%2C0.707-1.791%2C1.642%20c0%2C0.794%2C0.36%2C1.197%2C1.411%2C1.579c0.439%2C0.153%2C0.662%2C0.257%2C0.776%2C0.328c0.224%2C0.145%2C0.335%2C0.352%2C0.335%2C0.592%20c0%2C0.467-0.37%2C0.811-0.871%2C0.811c-0.533%2C0-0.964-0.267-1.222-0.768l-0.722%2C0.7c0.516%2C0.756%2C1.135%2C1.094%2C1.988%2C1.094%20c1.163%2C0%2C1.982-0.778%2C1.982-1.887C16.757%2C24.202%2C16.377%2C23.788%2C15.102%2C23.322z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M17.108%2C23.994c0%2C1.689%2C1.326%2C2.998%2C3.032%2C2.998c0.481%2C0%2C0.894-0.095%2C1.402-0.335v-1.32%20c-0.449%2C0.451-0.843%2C0.629-1.353%2C0.629c-1.128%2C0-1.927-0.816-1.927-1.98c0-1.1%2C0.825-1.972%2C1.877-1.972%20c0.531%2C0%2C0.937%2C0.188%2C1.402%2C0.646v-1.318c-0.491-0.248-0.894-0.351-1.379-0.351C18.467%2C20.991%2C17.108%2C22.325%2C17.108%2C23.994z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2230.617%2C24.977%2029.086%2C21.121%2027.864%2C21.121%2030.299%2C27.009%2030.9%2C27.009%2033.382%2C21.121%2032.17%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2233.89%2C26.864%2037.066%2C26.864%2037.066%2C25.891%2035.011%2C25.891%2035.011%2C24.341%2036.988%2C24.341%2036.988%2C23.368%2035.011%2C23.368%2035.011%2C22.093%2037.066%2C22.093%2037.066%2C21.121%2033.89%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M41.5%2C22.815c0-1.076-0.738-1.695-2.031-1.695h-1.664v5.743h1.123v-2.309h0.146l1.547%2C2.309H42l-1.807-2.421%20C41.037%2C24.271%2C41.5%2C23.694%2C41.5%2C22.815z%20M39.254%2C23.762h-0.325v-1.737h0.343c0.7%2C0%2C1.075%2C0.294%2C1.075%2C0.853%20C40.347%2C23.452%2C39.972%2C23.762%2C39.254%2C23.762z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E"); }

    .modal {
      /* display: -ms-flexbox; */
      /* display: flex; */
      -ms-flex-pack: center;
          justify-content: center;
      -ms-flex-align: center;
          align-items: center;
      height: 100vh;
      width: 100vw;
      padding-top: 200px;
      z-index: 100; 
    overflow-y: auto;
    }

    .modal1 {
      display: -ms-flexbox;
      /* display: flex; */
      -ms-flex-pack: center;
          justify-content: center;
      -ms-flex-align: center;
          align-items: center;
      height: 100vh;
      width: 100vw;
      padding-top: 10px;
      z-index: 100; 
    overflow-y: auto;
    }

    .hidden { display: none; }

    /* #success{
      display: -ms-flexbox;
      display: flex;
    } */

      .modal__container {
        display: -ms-flexbox;
        display: flex;
        max-width: 675px;
        min-height: 400px;
        margin-bottom: 125px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1); }
      .modal__featured {
        position: relative;
        -ms-flex: 1;
            flex: 1;
        min-width: 230px;
        padding: 20px;
        overflow: hidden;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px; }
      .modal__circle {
        position: absolute;
        top: 0;
        left: 0;
        height: 200%;
        width: 200%;
        background-color: #fbcf34;
        border-radius: 50%;
        -ms-transform: translateX(-50%) translateY(-25%);
            transform: translateX(-50%) translateY(-25%); }
      .modal__product {
        position: absolute;
        top: 50;
        left: 50%;
        max-width: 120%;
        -ms-transform: translateX(calc(-50% - 10px));
            transform: translateX(calc(-50% - 10px)); }
      .modal__content {
      -ms-flex: 3;
          flex: 3;
      padding: 40px 30px; }
</style>

<?php


    // Get the room ID, number of days, total amount etc from the URL parameters
    $roomId = isset($_GET['roomId']) ? $_GET['roomId'] : '';
    $noOfDays = isset($_GET['numberOfDays']) ? $_GET['numberOfDays'] : '';
    $totalAmount = isset($_GET['totalAmount']) ? $_GET['totalAmount'] : '';
    

    // Fetch room name from the database based on the room ID
    if ($roomId) {
        include_once 'db_connection.php'; // Include your database connection script

        $sql = "SELECT name FROM rooms WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $roomId);
        $stmt->execute();
        $result = $stmt->get_result();
        $roomData = $result->fetch_assoc();

        $roomName = $roomData['name'];
    } else {
        $roomName = 'Room Name Not Available';
    }

    // Now you can use $roomName, $noOfDays, and $totalAmount in your HTML or PHP code
?>

<script>

  /******/ (function(modules) { // webpackBootstrap
  /******/ 	// The module cache
  /******/ 	var installedModules = {};

  /******/ 	// The require function
  /******/ 	function __webpack_require__(moduleId) {

  /******/ 		// Check if module is in cache
  /******/ 		if(installedModules[moduleId])
  /******/ 			return installedModules[moduleId].exports;

  /******/ 		// Create a new module (and put it into the cache)
  /******/ 		var module = installedModules[moduleId] = {
  /******/ 			exports: {},
  /******/ 			id: moduleId,
  /******/ 			loaded: false
  /******/ 		};

  /******/ 		// Execute the module function
  /******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

  /******/ 		// Flag the module as loaded
  /******/ 		module.loaded = true;

  /******/ 		// Return the exports of the module
  /******/ 		return module.exports;
  /******/ 	}


  /******/ 	// expose the modules object (__webpack_modules__)
  /******/ 	__webpack_require__.m = modules;

  /******/ 	// expose the module cache
  /******/ 	__webpack_require__.c = installedModules;

  /******/ 	// __webpack_public_path__
  /******/ 	__webpack_require__.p = "/scripts/dist/";

  /******/ 	// Load entry module and return exports
  /******/ 	return __webpack_require__(0);
  /******/ })
  /************************************************************************/
  /******/ ([
  /* 0 */
  /***/ function(module, exports, __webpack_require__) {

    __webpack_require__(1);


  /***/ },
  /* 1 */
  /***/ function(module, exports, __webpack_require__) {

    'use strict';

    var _creditCardType = __webpack_require__(2);

    var _creditCardType2 = _interopRequireDefault(_creditCardType);

    function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

    $(document).on('input change', '#input--cc input', function () {
      var ccNum = $(this).val();
      var ccType = (0, _creditCardType2.default)(ccNum);

      if (!ccNum.length || typeof ccType === "undefined" || !ccType.length) {
        $('#input--cc').removeClass().addClass('creditcard-icon');
        return;
      }

      var creditcardType = ccType[0].type;

      var ccTypes = {
        'american-express': 'AE',
        'master-card': 'MC',
        'visa': 'VI',
        'discover': 'DI'
      };

      $('#input--cc').removeClass().addClass('creditcard-icon').addClass('creditcard-icon--' + creditcardType); //set creditcard icon

      // select creditcard type
      $(".creditcard-type > select").val(ccTypes[creditcardType]);
      // set the creditcard type <select> to the value entered
    });

  /***/ },
  /* 2 */
  /***/ function(module, exports) {

    'use strict';

    var types = {};
    var VISA = 'visa';
    var MASTERCARD = 'master-card';
    var AMERICAN_EXPRESS = 'american-express';
    var DINERS_CLUB = 'diners-club';
    var DISCOVER = 'discover';
    var JCB = 'jcb';
    var UNIONPAY = 'unionpay';
    var MAESTRO = 'maestro';
    var CVV = 'CVV';
    var CID = 'CID';
    var CVC = 'CVC';
    var CVN = 'CVN';
    var testOrder = [
      VISA,
      MASTERCARD,
      AMERICAN_EXPRESS,
      DINERS_CLUB,
      DISCOVER,
      JCB,
      UNIONPAY,
      MAESTRO
    ];

    function clone(x) {
      var prefixPattern, exactPattern, dupe;

      if (!x) { return null; }

      prefixPattern = x.prefixPattern.source;
      exactPattern = x.exactPattern.source;
      dupe = JSON.parse(JSON.stringify(x));
      dupe.prefixPattern = prefixPattern;
      dupe.exactPattern = exactPattern;

      return dupe;
    }

    types[VISA] = {
      niceType: 'Visa',
      type: VISA,
      prefixPattern: /^4$/,
      exactPattern: /^4\d*$/,
      gaps: [4, 8, 12],
      lengths: [16],
      code: {
        name: CVV,
        size: 3
      }
    };

    types[MASTERCARD] = {
      niceType: 'MasterCard',
      type: MASTERCARD,
      prefixPattern: /^(5|5[1-5]|2|22|222|222[1-9]|2[3-6]|27[0-1]|2720)$/,
      exactPattern: /^(5[1-5]|222[1-9]|2[3-6]|27[0-1]|2720)\d*$/,
      gaps: [4, 8, 12],
      lengths: [16],
      code: {
        name: CVC,
        size: 3
      }
    };

    types[AMERICAN_EXPRESS] = {
      niceType: 'American Express',
      type: AMERICAN_EXPRESS,
      prefixPattern: /^(3|34|37)$/,
      exactPattern: /^3[47]\d*$/,
      isAmex: true,
      gaps: [4, 10],
      lengths: [15],
      code: {
        name: CID,
        size: 4
      }
    };

    types[DINERS_CLUB] = {
      niceType: 'Diners Club',
      type: DINERS_CLUB,
      prefixPattern: /^(3|3[0689]|30[0-5])$/,
      exactPattern: /^3(0[0-5]|[689])\d*$/,
      gaps: [4, 10],
      lengths: [14],
      code: {
        name: CVV,
        size: 3
      }
    };

    types[DISCOVER] = {
      niceType: 'Discover',
      type: DISCOVER,
      prefixPattern: /^(6|60|601|6011|65|64|64[4-9])$/,
      exactPattern: /^(6011|65|64[4-9])\d*$/,
      gaps: [4, 8, 12],
      lengths: [16, 19],
      code: {
        name: CID,
        size: 3
      }
    };

    types[JCB] = {
      niceType: 'JCB',
      type: JCB,
      prefixPattern: /^(2|21|213|2131|1|18|180|1800|3|35)$/,
      exactPattern: /^(2131|1800|35)\d*$/,
      gaps: [4, 8, 12],
      lengths: [16],
      code: {
        name: CVV,
        size: 3
      }
    };

    types[UNIONPAY] = {
      niceType: 'UnionPay',
      type: UNIONPAY,
      prefixPattern: /^(6|62)$/,
      exactPattern: /^62\d*$/,
      gaps: [4, 8, 12],
      lengths: [16, 17, 18, 19],
      code: {
        name: CVN,
        size: 3
      }
    };

    types[MAESTRO] = {
      niceType: 'Maestro',
      type: MAESTRO,
      prefixPattern: /^(5|5[06-9]|6\d*)$/,
      exactPattern: /^5[06-9]\d*$/,
      gaps: [4, 8, 12],
      lengths: [12, 13, 14, 15, 16, 17, 18, 19],
      code: {
        name: CVC,
        size: 3
      }
    };

    function creditCardType(cardNumber) {
      var type, value, i;
      var prefixResults = [];
      var exactResults = [];

      if (!(typeof cardNumber === 'string' || cardNumber instanceof String)) {
        return [];
      }

      for (i = 0; i < testOrder.length; i++) {
        type = testOrder[i];
        value = types[type];

        if (cardNumber.length === 0) {
          prefixResults.push(clone(value));
          continue;
        }

        if (value.exactPattern.test(cardNumber)) {
          exactResults.push(clone(value));
        } else if (value.prefixPattern.test(cardNumber)) {
          prefixResults.push(clone(value));
        }
      }

      return exactResults.length ? exactResults : prefixResults;
    }

    creditCardType.getTypeInfo = function (type) {
      return clone(types[type]);
    };

    creditCardType.types = {
      VISA: VISA,
      MASTERCARD: MASTERCARD,
      AMERICAN_EXPRESS: AMERICAN_EXPRESS,
      DINERS_CLUB: DINERS_CLUB,
      DISCOVER: DISCOVER,
      JCB: JCB,
      UNIONPAY: UNIONPAY,
      MAESTRO: MAESTRO
    };

    module.exports = creditCardType;


  /***/ }
  /******/ ]);
  function goToPreviousPage() {
      window.history.back();
  }
</script>


        <section id="mission">
            <h1 class="custom-heading"><span>Payment Details</span> </h1>
        </section>


        <!-- https://codepen.io/gil411e8085ef/pen/yaZNqe -->
        
  <div class="modal" id="cvdeets" class="<?php echo $formSubmitted ? 'hidden' : 'flex'; ?>">
    <div class="modal__container" >
      <div class="modal__featured" >
        <button type="button" onclick="goToPreviousPage()" class="button--transparent button--close">
          <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
            <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
          <span class="visuallyhidden">Return to Product Page</span>
        </button>
        <div class="modal__circle"></div>
        <img src="images\Coconut-Tree-PNG-Clipart.png" class="modal__product" />
      </div>
      <div class="modal__content" >

        <form id="cvdeetsForm" method="POST" action="" >
          <ul class="form-list">
            <li class="form-list__row">
              <label>Name</label>
              <input type="text" name="nameoncard" id="nameoncard"required="" />
            </li>
            <li class="form-list__row">
              <label>Card Number</label>
              <div id="input--cc" class="creditcard-icon">
                <input minlength="15" maxlength="16" type="text" id="cardnumber" name="cc_number" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--inline">
              <div>
                <label>Expiration Date</label>
                <div class="form-list__input-inline">
                  <input type="text" id="expmo" name="cc_month" placeholder="MM"  minlength="2" maxlength="2" required="" />
                  <input type="text" id="expyr" name="cc_year" placeholder="YY"  minlength="2" maxlength="2" required="" />
                </div>
              </div>
              <div>
                <label>
                  CVC


                </label>
                <input type="text" name="cc_cvc" id="cvc" placeholder="123" minlength="3" maxlength="4" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--agree">
            <label>
                Room Name: <?php echo $roomName; ?><br>
                No. of Days: <?php echo $noOfDays; ?><br>
                Total Amount: <?php echo $totalAmount; ?> PESOS
            </label>
            </li>
            <li>
              <button type="submit" class="button">Pay Now</button>
            </li>
          </ul>
        </form>
      </div> <!-- END: .modal__content -->
    </div> <!-- END: .modal__container -->
  </div> <!-- END: .modal -->





<?php
    // Include database connection and necessary files
    require_once('db_connection.php');

    // Function to generate a unique transaction status code
    function generateTransactionCode() {
        return mt_rand(1000000000, 9999999999); // Generate a 10-digit random number
    }



    $formSubmitted = false;

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Extract form data
        $nameoncard = $_POST['nameoncard'] ?? '';
        $cardnumber = $_POST['cc_number'] ?? '';
        $expmo = $_POST['cc_month'] ?? '';
        $expyr = $_POST['cc_year'] ?? '';
        $cvc = $_POST['cc_cvc'] ?? '';



        $roomId = isset($_GET['roomId']) ? $_GET['roomId'] : '';
        $noOfDays = isset($_GET['numberOfDays']) ? $_GET['numberOfDays'] : '';
        $totalAmount = isset($_GET['totalAmount']) ? $_GET['totalAmount'] : '';
        
        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $fullName = isset($_GET['fullName']) ? $_GET['fullName'] : '';
        $checkIn = isset($_GET['checkIn']) ? $_GET['checkIn'] : '';
        $checkOut = isset($_GET['checkOut']) ? $_GET['checkOut'] : '';
    
        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

        // Generate a unique transaction status code

        try {


            // Begin transaction
            // Verify that the user_id exists in the users table
            $stmt = $conn->prepare("SELECT id FROM users WHERE id = ?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 0) {
                throw new Exception("User ID does not exist in users table.");
            }

            $stmt = $conn->prepare("SELECT id FROM rooms WHERE id = ?");
            $stmt->bind_param("i", $roomId);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 0) {
                throw new Exception("Room ID does not exist in users table.");
            }

            // Insert data into the bookings table
            $stmt = $conn->prepare("INSERT INTO bookings (user_id, room_id, check_in, check_out, arrival, refund, booking_status, trans_amt, trans_status) VALUES (?, ?, ?, ?, 0, NULL, 'pending', ?, 'completed')");
            $stmt->execute([$userId, $roomId, $checkIn, $checkOut, $totalAmount ]);
            $bookingId = $conn->insert_id; // Get the last inserted booking ID



            // Insert data into the payment_details table
            $stmt = $conn->prepare("INSERT INTO payment_details (booking_id, nameoncard, cardnumber, expmo, expyr, cvc, totalAmount) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$bookingId, $nameoncard, $cardnumber, $expmo, $expyr, $cvc, $totalAmount]);

            // Insert data into the booking_details table
            $stmt = $conn->prepare("INSERT INTO booking_details (booking_id, price, total_pay, room_no, userID, phonenum, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$bookingId, $price, $totalAmount, $roomId, $userId, $phone, $email]);

            // Commit the transaction
            $conn->commit();

            $formSubmitted = true;

            // Redirect to success page or display a success message
            // header("Location: success.php");
            echo '

            <div class="modal1" id="success">
            <div class="modal__content" >
      
              <!-- Generic Pod Left Aligned with Price breakdown Start -->
              <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white" class="bordered-left-right" style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                              <tr height="50"><td colspan="3" style="color: #464646; font-family:Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                              <tr align="center">
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td class="text-primary" style="color: #F16522; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                      <img src="http://dgtlmrktng.s3.amazonaws.com/go/emails/generic-email-template/tick.png" alt="GO" width="50" style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                                  </td>
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
                              <tr height="17"><td colspan="3" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                              <tr align="center">
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td class="text-primary" style="color: #F16522; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                      <h1 style="color: #F16522; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">Payment received</h1>
                                  </td>
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
                              <tr height="30"><td colspan="3" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                              <tr align="left">
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                          Hi ' . htmlspecialchars($fullName) . ', 
                                      </p>
                                  </td>
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
                              <tr height="10"><td colspan="3" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                              <tr align="left">
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Your transaction was successful!</p>
                                      <br>
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; "><strong>Payment Details:</strong><br/>
                                      Amount: ' . $totalAmount . ' <br/>
                                      Account: ' . $cardnumber . '.<br/></p>
                                    <br>
      
                                  </td>
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
                              <tr height="5">
                                  <td style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td style="border-bottom: 1px solid #D3D1D1; color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
                              <tr height="30"><td colspan="3" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                              <tr align="center">
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                                  <td style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;"><strong>Transaction reference: ' . $bookingId . '</strong></p>
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Order date: '.date('l jS \of F Y h:i:s A').'</p>
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;"></p>
                                      <p style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Redirecting to homepage in <span id="countdown">10</span> seconds...</p>

                                  </td> 
                                  
                                    
      
                                  <td width="36" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
      
      
      
                              <tr height="50">
                                  <td colspan="3" style="color: #464646; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                              </tr>
      
                          </table>
            </div> <!-- END: .modal__content -->
        </div> <!-- END: .modal -->

        <script>
    // Function to redirect to index.php after a specified time
    function redirectToIndex() {
        // Set the countdown duration in seconds
        var countdownDuration = 10;
        var countdownElement = document.getElementById("countdown");

        // Update the countdown every second
        var countdownInterval = setInterval(function() {
            countdownDuration--;
            countdownElement.innerText = countdownDuration;

            // Redirect to index.php when countdown reaches 0
            if (countdownDuration <= 0) {
                clearInterval(countdownInterval); // Stop the countdown
                window.location.href = "index.php"; // Redirect to index.php
            }
        }, 1000);
    }

    // Call the function when the page loads
    window.onload = redirectToIndex;
</script>
        
        
        ';



            exit();
        } catch (PDOException $e) {
            // Rollback the transaction on error
            $conn->rollback();
            echo "Error: " . $e->getMessage();
        }
    }
?>


<script>


  document.addEventListener("DOMContentLoaded", function() {
        const formSubmitted = <?php echo json_encode($formSubmitted); ?>;
        const cvdeets = document.getElementById('cvdeets');
        const success = document.getElementById('success');
        
        if (formSubmitted) {
            cvdeets.style.display = 'none';
            success.style.display = 'flex';
        } else {
            cvdeets.style.display = 'flex';
            success.style.display = 'none';
        }
    });

  function goToPreviousPage() {
      window.history.back();
  }
</script>




</body>
</html>