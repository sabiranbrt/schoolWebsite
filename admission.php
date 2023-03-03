<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Admission</h1>
            <a href="index.php">Home</a>
            <span>Admission</span>
        </div>
    </div>
</section>

<section class="admission-form">
    <div class="container">
        <div class="offline-form">
            <h2>Admisson</h2>
            <p>For admission in Grade 2-9, there will be a short entrance paper in English and Math's
                to assess the academic ability of the student. For admission in Grade 6 to 9, half yearly/
                final examination report of the previous school is mandatory. For admission in class XI,
                a student must have passed/appeared for CBSE/ SEE or equivalent from a recognized institution/ board.
                The student should have scored 60% and above to be eligible for admission.
                If the results have not been declared, we provide provisional admission.
            </p>
            <span>Admission Form Download</span>
            <a href="#">Download</a>
        </div>

        <div class="online-form">
            <div class="form-head">
                <div class="logo">
                    <img src="assets/image/achool-logo.jpg" alt="">
                    <p>Lincoln School</p>
                </div>
                <h2>Online Admission Form</h2>
                <div class="photo">
                    <i class="fa-solid fa-user"></i>
                    <label class="custom-file-upload">
                        <input type="file" />
                    </label>
                </div>
            </div>

            <div class="form">
                <form action="#">
                    <div class="std-info">
                        <h4>student's personal information:</h4>
                        <div class="std-content">
                            <div class="cols">
                                <label for="">Student's Full Name:</label>
                                <input type="text" name="name" id="">
                            </div>
                            <div class="rows">
                                <div class="cols">
                                    <label for="">Date of Birth:</label>
                                    <input type="date" name="name" id="">
                                </div>
                                <div class="cols">
                                    <label for="">Place of Birth:</label>
                                    <input type="text" name="name" id="">
                                </div>
                                <div class="cols">
                                    <label for="">Gender:</label>
                                    <div class="radio">
                                        Male
                                        <input type="radio" name="" id="">
                                        Female
                                        <input type="radio" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="rows">
                                <div class="cols">
                                    <label for="">Nationality:</label>
                                    <input type="text" name="name" id="">
                                </div>
                                <div class="cols">
                                    <label for="">Mother Tongue:</label>
                                    <input type="text" name="name" id="">
                                </div>
                                <div class="cols">
                                    <label for="">Religion:</label>
                                    <input type="text" name="name" id="">
                                </div>
                            </div>
                            <div class="cols">
                                <label for="">Permanent Address:</label>
                                <input type="text" name="name" id="">
                            </div>
                            <div class="cols">
                                <label for="">Current Address:</label>
                                <input type="text" name="name" id="">
                            </div>
                        </div>
                    </div>
                    <div class="academic-info">
                        <h4>last academin information:</h4>
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="medical-info">
                        <h4>MEDICAL INFORMATION</h4>
                        <div class="rows">
                            <div class="cols">
                                <label for="">Blood Group:</label>
                                <input type="text" name="name" id="">
                            </div>
                            <div class="cols">
                                <label for="">Height:</label>
                                <input type="text" name="name" id="">
                            </div>
                            <div class="cols">
                                <label for="">Weight:</label>
                                <input type="text" name="name" id="">
                            </div>
                        </div>
                        <div class="cols">
                            <label for="">Please mention if any medical issue</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="service-info">
                        <h4>SERVICE REQUIRED:</h4>
                        <div class="cols">
                            <label for="">Hostel Facility:</label>
                            <div class="radio">
                                Yes
                                <input type="radio" name="" id="">
                                No
                                <input type="radio" name="" id="">
                            </div>
                        </div>
                        <div class="cols">
                            <label for="">Transportation Service:</label>
                            <div class="radio">
                                Yes
                                <input type="radio" name="" id="">
                                No
                                <input type="radio" name="" id="">
                            </div>
                        </div>
                        <input type="text" name="" id="" placeholder="If yes, mention pickup point">
                        <div class="cols">
                            <label for="">Launch:</label>
                            <div class="radio">
                                Yes
                                <input type="radio" name="" id="">
                                No
                                <input type="radio" name="" id="">
                            </div>
                        </div>
                        <input type="text" name="" id="" placeholder="If yes, Veg/Non-Veg">
                        <div class="cols">
                            <label for="">After School:</label>
                            <div class="radio">
                                Yes
                                <input type="radio" name="" id="">
                                No
                                <input type="radio" name="" id="">
                            </div>
                        </div>
                        <input type="text" name="" id="" placeholder="If yes, What kind of program">

                    </div>
                    <div class="check-doc">
                        <h4>CHECKLIST OF DOCUMENTS TO BE ATTACHED</h4>
                        <div class="rows">
                            <div class="cols">
                                <input type="checkbox" id="birth" name="birth" value="birth">
                                <label for="birth">Birth Certificate</label>
                            </div>
                            <div class="cols">
                                <input type="checkbox" id="transfer" name="transfer" value="transfer">
                                <label for="transfer">Transfer Certificate</label>
                            </div>
                            <div class="cols">
                                <input type="checkbox" id="migration" name="migration" value="migration">
                                <label for="migration">Migration Certificate</label>
                            </div>
                            <div class="cols">
                                <input type="checkbox" id="migration" name="migration" value="migration">
                                <label for="migration">Character Certificate</label>
                            </div>
                            <div class="cols">
                                <input type="checkbox" id="migration" name="migration" value="migration">
                                <label for="migration">Parent's Citizenship</label>
                            </div>

                        </div>

                        <div class="cols-1">
                            <label for="">Upload your documents here [ Please attach all documents in a single file(.pdf/.doc/.docx/.zip) ]</label>
                            <input type="file" name="file" id="">
                        </div>
                    </div>
                    <div class="sibling-info">
                        <h4>PARENTS/GUARDIAN:</h4>
                        <div class="rows">
                            <div class="cols">
                                <label for="">Father's Name</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="cols">
                                <label for="">Father's Number</label>
                                <input type="text" name="" id="">
                            </div>
                            
                        </div>
                        <div class="rows">
                            <div class="cols">
                                <label for="">Mother's Name</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="cols">
                                <label for="">Mother's Number</label>
                                <input type="text" name="" id="">
                            </div>
                            
                        </div>
                        <div class="rows">
                            <div class="cols">
                                <label for="">Guardian's Name</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="cols">
                                <label for="">Guardian's Number</label>
                                <input type="text" name="" id="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="declaration">
                        <h4>DECLARATION:</h4>
                        <div class="para">
                            <p>I <input type="text" name="" id="">
                            the <select id="guardian">
                                  <option value="volvo">parent</option>
                                  <option value="saab">guardian</option>
                                  <option value="opel">student</option>
                                </select>
                                seeking admission in Lincoln School,
                                 solemnly declare that the above given information is 
                                 true to my knowledge and I will strictly abideby the
                                  rules and regulations in force and that may be framed
                                   hereafter, and will not indulge in any unsocial activities.
                                    I will avoid any act of indiscipline and breach of rules. 
                                    I further agree to reimburse any furniture, apparatus, etc.
                                     which may cause by carelessness or wantonness on my part.
                            </p>
                            <ul>
                                <li>In case of medical emergency in school premises, respective class teacher or medical supervisor will offer immediate first aid and/or take the student to a nearby hospital and inform the parent/guardian as soon as possible. All the medical expenses occured during should by borne by parents/guardian at the time, which later may be claimed as per Group Personnel Accidental Insurance policy for students.</li>
                                <li>School has the right to use student's photograph (candid or professional shoot) in any of the school's collateral or promotional purpose. For any objection to it, the administration can be furnished a letter at the time of admission.</li>
                            </ul>
                            <p>(Only duly filled application along with the required documents will be accepted by the school)</p>
                            <input type="checkbox" name="" id="">
                            <label for="">I read the above statements and I strongly agree to them.</label>
                        </div>
                    </div>
                    <div class="contact-info">
                        <h4>APPLICANT'S CONTACT DETAILS:</h4>
                        <div class="rows">
                            <div class="cols">
                                <label for="">Contact Number</label>
                                <input type="text" name="" id="">
                            </div>
                            <div class="cols">
                                <label for="">Email</label>
                                <input type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="recaptcha">
                        <div class="wrapper">
                            <div class="check">
                                <input type="checkbox" name="" id="">
                                <label for="">I'm not a robot</label>
                            </div>
                            <div class="logo">
                                <img src="assets/image/capcha.png" alt="">
                                <p>reCAPTCHA</p>
                                <p>Privacy . Terms</p>
                            </div>
                        </div>
                    </div>

                    <div class="btns">
                       <a href="#">Submit Application</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>