<?php include 'common/header.php'; ?>
<?php include 'common/navbar-top.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Community</h1>
            <a href="index.php">Donation</a>
            <a href="team.php">Donate Form</a>
        </div>
    </div>
</section>

<section class="donation-form">
<div class="container">
<div class="head">
        <h2>Donate</h2>
    </div>
    <div class="donar-info">
        <div class="form-donar-info">
            <h2>Donar Information</h2>
            <form action="">
                <div class="fname">
                    <label for="#">Name:</label>
                    <input type="text" name="" id="" placeholder="Full name">
                </div>
                <div class="check">
                    <input type="checkbox" name="" id="">
                    <p>Make donation anoymous ?</p>
                </div>
                <div class="mail">
                    <label for="">Email:</label>
                    <input type="email" name="" id="">
                    <label for="">Phone Number:</label>
                    <input type="tel" name="" id="">
                    <label for="">Street:</label>
                    <input type="text" name="" id="">
                    <label for="">City:</label>
                    <input type="text" name="" id="">
                    <label for="">State:</label>
                    <input type="text" name="" id="">
                    <label for="">Zip Code</label>
                    <input type="text" name="" id="">
                </div>
            </form>
        </div>
        <div class="form-payment-info">
            <h2>Payment Information</h2>
            <div class="page-tabs">
                <ul role="list">
                    <li class="active" data-tab-target="#card">Credit Card</li>
                    <li data-tab-target="#bank">Bank Account</li>
                    <li data-tab-target="#esewa">Esewa</li>
                </ul>
            </div>
            <div class="payment active" id="card" data-tab-content>
                <p>Pay by Credit Card</p>
                <form action="">
                    <div class="card-number">
                    <label for="">Card Number</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="expire">
                        <label for="">Expiration</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="verify">
                        <label for="">Verification</label>
                        <input type="text" name="" id="" placeholder="CVC">
                    </div>
                </form>
            </div>
            <div class="payment" id="bank" data-tab-content>
                <p>Pay by Bank Acoount</p>
                <form action="">
                    <div class="acc-number">
                    <label for="">Account Number:</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="acc-name">
                        <label for="">Account Name:</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="transcation">
                        <label for="">Transcation Detail:</label>
                        <input type="text" name="" id="">
                    </div>
                </form>
            </div>
            <div class="payment" id="esewa" data-tab-content>
                <p>Pay by Esewa</p>
                <form action="">
                    <div class="esewa-num">
                    <label for="">Esewa Number:</label>
                    <input type="tel" name="" id="">
                    </div>
                    <div class="esewa-name">
                        <label for="">Esewa Name:</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="Transacation">
                        <label for="">Transaction Detail:</label>
                        <input type="text" name="" id="" >
                    </div>
                </form>
            </div>
            <div class="btns">
                <a href="#">Submit</a>
            </div>
        </div>
    </div>
</div>
  
</section>

<?php include 'common/footer.php'; ?>