<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prediction</title>
    <link href=”https://fonts.googleapis.com/css?family=Raleway:100,600" rel=”stylesheet” type=”text/css”>
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <script src=”https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        @if(session()->has('predict'))
{{--            @dd(session('predict'))--}}
            @if(session('predict') == '0')
                <div>
                    Approved
                </div>
            @else
                <div>
                    Rejected
                </div>
            @endif
        @endif
        <form action="{{ route('predict') }}" method="POST">
            @csrf
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Select your gender
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="gender"
                                id="gender"
                                value="0"
                            />
                            Female
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="gender"
                                id="gender"
                                value="0"
                            />
                            Male
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Do you own a car?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="car"
                                id="car"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="car"
                                id="car"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Do you own a property?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="property"
                                id="property"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="property"
                                id="property"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Do you have work phone?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="work_phone"
                                id="work_phone"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="work_phone"
                                id="work_phone"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Do you have phone?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="phone"
                                id="phone"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="phone"
                                id="phone"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Do you have email?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="email"
                                id="email"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="email"
                                id="email"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-radio-wrapper">
                <label for="ans" class="formbold-form-label">
                    Are you unemployed?
                </label>

                <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="unemployed"
                                id="umeployed"
                                value="0"
                            />
                            No
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input required
                                class="formbold-input-radio"
                                type="radio"
                                name="unemployed"
                                id="unemployed"
                                value="0"
                            />
                            Yes
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="formbold-input-group">
                <label for="children" class="formbold-form-label"> Number of children </label>
                <input required
                    type="number"
                    name="children"
                    id="children"
                    class="formbold-form-input"
                />
            </div>
            <div class="formbold-input-group">
                <label for="family" class="formbold-form-label"> Number of family members </label>
                <input required
                    type="number"
                    name="family"
                    id="family"
                    class="formbold-form-input"
                />
            </div>
            <div class="formbold-input-group">
                <label for="account" class="formbold-form-label"> Month of credit card </label>
                <input required
                    type="number"
                    name="account"
                    id="account"
                    class="formbold-form-input"
                />
            </div>
            <div class="formbold-input-group">
                <label for="income" class="formbold-form-label"> Total income </label>
                <input required
                    type="number"
                    name="income"
                    id="income"
                    class="formbold-form-input"
                />
            </div>
            <div class="formbold-input-group">
                <label for="age" class="formbold-form-label"> Age </label>
                <input required
                    type="number"
                    name="age"
                    id="age"
                    class="formbold-form-input"
                />
            </div>
            <div class="formbold-input-group">
                <label for="age" class="formbold-form-label"> Years employed </label>
                <input required
                    type="number"
                    name="years_employed"
                    id="years_employed"
                    class="formbold-form-input"
                />
            </div>

            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    Income type
                </label>

                <select required class="formbold-form-select" name="income_type" id="income_type">
                    <option value="0">Commercial associate</option>
                    <option value="1">Pensioner</option>
                    <option value="2">State servant</option>
                    <option value="3">Student</option>
                    <option value="4">Working</option>
                </select>
            </div>

            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    Education type
                </label>

                <select required class="formbold-form-select" name="education_type" id="education_type">
                    <option value="0">Academic degree</option>
                    <option value="1">Higher education</option>
                    <option value="2">Incomplete higher</option>
                    <option value="3">Lower secondary</option>
                    <option value="4">Secondary / secondary special</option>
                </select>
            </div>

            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    Family status
                </label>

                <select required class="formbold-form-select" name="family_status" id="family_status">
                    <option value="0">Civil marriage</option>
                    <option value="1">Married</option>
                    <option value="2">Separated</option>
                    <option value="3">Single / not married</option>
                    <option value="4">Widow</option>
                </select>
            </div>

            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    Housing type
                </label>

                <select required class="formbold-form-select" name="housing_type" id="housing_type">
                    <option value="0">Co-op apartment</option>
                    <option value="1">House / apartment</option>
                    <option value="2">Municipal apartment</option>
                    <option value="3">Office apartment</option>
                    <option value="4">Rented apartment</option>
                    <option value="5">With parents</option>
                </select>
            </div>

            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    Occupation type
                </label>

                <select required class="formbold-form-select" name="occupation_type" id="occupation_type">
                    <option value="0">Accountants</option>
                    <option value="1">Cleaning staff</option>
                    <option value="2">Cooking staff</option>
                    <option value="3">Core staff</option>
                    <option value="4">Drivers</option>
                    <option value="5">HR staff</option>
                    <option value="6">High skill tech staff</option>
                    <option value="7">IT staff</option>
                    <option value="8">Laborers</option>
                    <option value="9">Low-skill Laborers</option>
                    <option value="10">Managers</option>
                    <option value="11">Medicine staff</option>
                    <option value="12">Private service staff</option>
                    <option value="13">Realty agents</option>
                    <option value="14">Sales staff</option>
                    <option value="15">Secretaries</option>
                    <option value="16">Security staff</option>
                    <option value="17">Waiters/barmen staff</option>
                    <option value="18">Other</option>
                </select>
            </div>

            <button class="formbold-btn" type="submit">Submit</button>
        </form>
    </div>
</div>
@include('sweetalert::alert')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Inter', sans-serif;
    }
    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 570px;
        width: 100%;
        background: white;
        padding: 40px;
    }

    .formbold-form-img {
        margin-bottom: 45px;
    }

    .formbold-input-group {
        margin-bottom: 18px;
    }

    .formbold-form-select {
        width: 100%;
        padding: 12px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-size: 16px;
        color: #536387;
        outline: none;
        resize: none;
    }

    .formbold-input-radio-wrapper {
        margin-bottom: 25px;
    }
    .formbold-radio-flex {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .formbold-radio-label {
        font-size: 14px;
        line-height: 24px;
        color: #07074d;
        position: relative;
        padding-left: 25px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .formbold-input-radio {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    .formbold-radio-checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #ffffff;
        border: 1px solid #dde3ec;
        border-radius: 50%;
    }
    .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark {
        background-color: #6a64f1;
    }
    .formbold-radio-checkmark:after {
        content: '';
        position: absolute;
        display: none;
    }

    .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark:after {
        display: block;
    }

    .formbold-radio-label .formbold-radio-checkmark:after {
        top: 50%;
        left: 50%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ffffff;
        transform: translate(-50%, -50%);
    }

    .formbold-form-input {
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-weight: 500;
        font-size: 16px;
        color: #07074d;
        outline: none;
        resize: none;
    }
    .formbold-form-input::placeholder {
        color: #536387;
    }
    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
        color: #07074d;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
    }

    .formbold-btn {
        text-align: center;
        width: 100%;
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #6a64f1;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }
    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
</style>
</body>
</html>
