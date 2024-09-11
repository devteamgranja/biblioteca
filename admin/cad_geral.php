

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Forms</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">

                <div class="col-12">


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Basic</h5>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                </div>

                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Horizontal</h5>

                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                                    value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                                    value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                                    value="option3" disabled>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Third disabled radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-2">Checkbox</div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-0">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Top Labels Over Line</h5>

                            <form>

                                <label class="form-group has-float-label">
                                    <input class="form-control" />
                                    <span>E-mail</span>
                                </label>

                                <label class="form-group has-float-label">
                                    <input class="form-control" type="password" placeholder="" />
                                    <span>Password</span>
                                </label>


                                <label class="form-group has-float-label">
                                    <input data-role="tagsinput" type="text">
                                    <span>Tags</span>
                                </label>

                                <label class="form-group has-float-label">
                                    <input class="form-control datepicker" placeholder="">
                                    <span>Date</span>
                                </label>

                                <label class="form-group has-float-label">
                                    <select class="form-control select2-single">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                    <span>State</span>
                                </label>

                                <button class="btn btn-primary" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Top Labels In Input</h5>

                            <form>

                                <label class="form-group has-top-label">
                                    <input class="form-control" />
                                    <span>E-MAIL</span>
                                </label>

                                <label class="form-group has-top-label">
                                    <input class="form-control" id="password" type="password" placeholder="" />
                                    <span>PASSWORD</span>
                                </label>

                                <label class="form-group has-top-label">
                                    <input data-role="tagsinput" type="text">
                                    <span>TAGS</span>
                                </label>

                                <label class="form-group has-top-label">
                                    <input class="form-control datepicker" placeholder="">
                                    <span>DATE</span>
                                </label>

                                <label class="form-group has-top-label">
                                    <select class="form-control select2-single">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                    <span>STATE</span>
                                </label>

                                <button class="btn btn-primary" type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Form Grid</h5>

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                                        disabled>
                                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                </div>

                                <button type="submit" class="btn btn-primary d-block mt-3">Sign in</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Inline</h5>

                            <form class="form-inline">
                                <label class="sr-only" for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                    placeholder="Jane Doe">

                                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                        placeholder="Username">
                                </div>

                                <div class="form-check mb-2 mr-sm-2">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                        Remember me
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-sm btn-outline-primary mb-2">Submit</button>
                            </form>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Form Validations</h5>

                            <h6 class="mb-3">Tooltips</h6>

                            <form class="needs-validation mb-5" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip001">First name</label>
                                        <input type="text" class="form-control" id="validationTooltip001" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip002">Last name</label>
                                        <input type="text" class="form-control" id="validationTooltip002" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltipUsername2">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="validationTooltipUsername2"
                                                placeholder="Username" aria-describedby="validationTooltipUsernamePrepend"
                                                required>
                                            <div class="invalid-tooltip">
                                                Please choose a unique username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip003">City</label>
                                        <input type="text" class="form-control" id="validationTooltip003" placeholder="City"
                                            required>
                                        <div class="invalid-tooltip">
                                            Please provide a city.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip004">State</label>
                                        <input type="text" class="form-control" id="validationTooltip004" placeholder="State"
                                            required>
                                        <div class="invalid-tooltip">
                                            Please provide a state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip005">Zip</label>
                                        <input type="text" class="form-control" id="validationTooltip005" placeholder="Zip"
                                            required>
                                        <div class="invalid-tooltip">
                                            Please provide a zip.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>


                            <h6 class="mb-3">Icons</h6>

                            <form class="needs-validation mb-5" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip01">First name</label>
                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-icon" data-toggle="tooltip" data-placement="left" title="Looks good!">
                                            <i class="simple-icon-check "></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip02">Last name</label>
                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-icon" data-toggle="tooltip" data-placement="left" title="Looks good!">
                                            <i class="simple-icon-check "></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltipUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validationTooltipUsernamePrepend2">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="validationTooltipUsername"
                                                placeholder="Username" aria-describedby="validationTooltipUsernamePrepend2"
                                                required>
                                            <div class="invalid-icon" data-toggle="tooltip" data-placement="left" title="Please choose a unique username">
                                                <i class="simple-icon-ban "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">City</label>
                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="City"
                                            required>
                                        <div class="invalid-icon" data-toggle="tooltip" data-placement="left" title="Please provide a city.">
                                            <i class="simple-icon-ban "></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip04">State</label>
                                        <input type="text" class="form-control" id="validationTooltip04" placeholder="State"
                                            required>
                                        <div class="invalid-icon" data-toggle="tooltip" data-placement="left" title="Please provide a state.">
                                            <i class="simple-icon-ban "></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip05">Zip</label>
                                        <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip"
                                            required>
                                        <div class="invalid-icon" data-toggle="tooltip" data-placement="left" title="Please provide a zip.">
                                            <i class="simple-icon-ban "></i>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>






                            <h6 class="mb-3">Default</h6>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                            value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                            value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="validationCustomUsername"
                                                placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">City</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City"
                                            required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">State</label>
                                        <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                            required>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip"
                                            required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
