@extends('layout')

@section('script')
<script src="js/BMI-calculator.js"></script>
@endsection

@section('body')
    
<section class="home-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <h2>Calculate your BMI</h2>
                    <p class="long-details">
                        Our BMI calculator makes it a piece of cake for
                        you to find your number. However, please
                        remember that BMI is a rough estimation. The
                        result can be somewhat misleading for
                        individuals who are well muscled (such as body
                        builders), or for those who have lost a
                        significant amount of muscle (such as the
                        elderly).
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4></h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <input
                                    id="heightBMI"
                                    type="number"
                                    placeholder="Height in meters"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input
                                    id="weightBMI"
                                    type="number"
                                    placeholder="Weight in Kg"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    Normal (18,5 - 24,9)
                                </p>
                                <p>
                                    Your BMI:
                                    <span id="resultBMI"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a
                                    href="#"
                                    class="primary-btn about-btn"
                                    id="calculateBMI"
                                    >Calculate</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection