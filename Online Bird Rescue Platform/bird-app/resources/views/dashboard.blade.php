@include('frontend.layouts.header')

<head>
  <style>
    .sectionDnt {
      font-family: 'Poppins', sans-serif;
      margin-top: 89px;
    }

    /* Style the tab */
    .tab {
      display: flex;
      justify-content: center;
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      padding: 20px 40px;
      display: none;
      border: 1px solid #ccc;
      border-top: none;
    }

    /* donation table */
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #568D61;
      color: white;
    }

    .th1 {
      height: 50px;
      background-color: #222923;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .th1 span {
      display: flex;
      position: relative;
      padding: 8px;
    }

    #td3{
      margin-left: 20px;
      width: 80px;
      height: 80px;
      overflow: visible;
    }

    #td2{
      margin-left: 20px;
    }

    #td1{
      margin-right: 20px;
    }

    .dnt-outro{
      display:flex;
      width: 100%;
      max-height: 800px;
      padding: 10px;
      justify-content: center;
      margin-top: 40px;
    }

    .dnt-outro p{
      padding: 20px 10px;
      width: 80%;
      background-color: #FBFCF4; 
      text-align: center;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      border-radius: 10px;
    }
  </style>
</head>


<div class="sectionDnt">

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Donation')">Dontaion History</button>
    <button class="tablinks" onclick="openTab(event, 'Gallery')">Image Gallery</button>
    <button class="tablinks" onclick="openTab(event, 'Feedback')">Feedbacks</button>
  </div>

  

  <div id="Donation" class="tabcontent">
  <div class="container">

  @auth
  @if($totalDonatedAmount > 0.00)
  <div class="th1">
      @if($totalDonatedAmount == $highestDonatedAmount)
          <img id="td3" src="assets/img/badgeTD.png">
      @endif
      <span id="td2">{{ Auth::user()->name }}</span>
      <span id="td1">Total Donated:&nbsp;&nbsp;
          <div>{{ $totalDonatedAmount }} BDT</div>
      </span>
  </div>
  <table id="customers">
      <tr>
          <th>Time</th>
          <th>Transaction ID</th>
          <th>Amount</th>
      </tr>
      @foreach ($orders->reverse() as $order)
      <tr>
          <td>{{ $order->time }}</td>
          <td>{{ $order->transaction_id }}</td>
          <td>{{ $order->amount }} BDT</td>
      </tr>
      @endforeach
  </table>
@else 
  <div style="text-align:center;">You haven't donated yet.</div>
@endif
@endauth
</div>

  <div class="dnt-outro">
  <p>BD Birds is a non-profitable organization. 
          We are volunteering to protect Bird habitats in Bangladesh. 
          <br>We have an active bird-rescue team in Dhaka who will respond
          to your call in need of a rescue.
           <br>All the funds we collect directly go to rescuing birds, 
          treatment after rescues and making bird feeders at places near homes and streets. 
          <br><strong>We very much appreciate your Donations.</strong>
  </p>
  </div>
  </div>

  


  <div id="Gallery" class="tabcontent">
    <h3>Gallery</h3>
    <p>Here, you will find your uploaded images those were sent to us.</p>
  </div>

  <div id="Feedback" class="tabcontent">
    <h3>Feedbacks</h3>
    <p>Here, you will find your sent-feedbacks.</p>
  </div>

</div>
  

<script>
  // Function to show the first tab content when the page is loaded
  window.addEventListener('DOMContentLoaded', function() {
    // Get the first tab content and button
    var firstTabContent = document.getElementsByClassName('tabcontent')[0];
    var firstTabButton = document.getElementsByClassName('tablinks')[0];

    // Display the first tab content
    firstTabContent.style.display = 'block';

    // Add the 'active' class to the first tab button
    firstTabButton.className += ' active';
  });

  // Function to handle tab button clicks
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName('tabcontent');
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = 'none';
    }
    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(' active', '');
    }
    document.getElementById(tabName).style.display = 'block';
    evt.currentTarget.className += ' active';
  }
</script>


@include('frontend.layouts.footer')