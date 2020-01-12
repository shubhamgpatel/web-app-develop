<div class="container-sign-up">
    <form method="post">
        <div class="row">
            <h1>Create new account</h1>
            <div class="form-details">
                <label for="firstname">Name<span class="asterisk">*</span> </label>
                <input type="text" id="firstname" onKeyPress="return validate_name(event)" required>    
            </div>
            <div class="form-details">
                <label for="email">Email<span class="asterisk">*</span> </label>
                <input type="text" id="email" required>
                <span id="email_error"></span>
            </div>
            <div class="form-details">
                <label for="phone">Phone<span class="asterisk">*</span></label>
                <input type="text" id="phone" required>
                <span id="phone_error"></span>
            </div>
            <div class="gender">
                <h3>Gender : </h3> <span class="asterisk">*</span><br/>
                <input type="radio" name="gender" id="Male" required />
                <label for="Male">Male</label>

                <input type="radio" name="gender" id="Female" />
                <label for="Female">Female</label>
            </div>
            <div class="marital-status">
                <h3>Select your marital status</h3> <span class="asterisk">*</span>
                <select id="marital_status" name="status" required>
                    <option value="" selected="true" disabled="true"></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>
            
            <div class="hobbies">
                <h3>Hobbies : </h3>
                <div>
                    <input type="checkbox" name="Cricket" id="cricket" value="cricket">
                    <label for="cricket">Cricket</label>&ensp;
                </div>
                <div>
                    <input type="checkbox" name="Dancing" id="dancing" value="Dancing">
                    <label for="dancing">Dancing</label>&ensp;
                </div>
                <div>
                    <input type="checkbox" name="cooking" id="cooking" value="cooking">
                    <label for="cooking">Cooking</label>
                </div>
                <div>
                    <input type="checkbox" name="Listening_songs" id="listening_songs" value="listening_songs">
                    <label for="listening_songs">Listening songs</label>&ensp;
                </div>
            </div>
            <div>
                <h3> Something about you : </h3>
                <textarea rows="3" cols="30"></textarea>
            </div>
            
            <br>
            <input type="submit" value="Submit" />
        </div>
    </form>

</div>
