@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-5">
            <p class="text-muted small text-uppercase mb-2" style="letter-spacing: 2px;">Contact Us</p>
            <h1 class="display-5 fw-bold text-uppercase mb-5">Get in Touch <br> with MonoMotors</h1>

            <div class="mb-4">
                <h6 class="fw-bold text-uppercase small">Our Showroom</h6>
                <p class="text-secondary">123 Luxury Drive, Automotive District<br>New York, NY 10001</p>
            </div>

            <div class="mb-4">
                <h6 class="fw-bold text-uppercase small">Contact Details</h6>
                <p class="text-secondary mb-1">Phone: +1 (555) 000-1234</p>
                <p class="text-secondary">Email: info@monomotors.com</p>
            </div>

            <div class="mb-5">
                <h6 class="fw-bold text-uppercase small">Opening Hours</h6>
                <p class="text-secondary mb-1">Mon - Fri: 09:00 AM - 08:00 PM</p>
                <p class="text-secondary">Sat - Sun: 10:00 AM - 06:00 PM</p>
            </div>

            <div class="d-flex h3 gap-3">
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-twitter-x"></i></a>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="bg-white p-5 shadow-sm border">
                <form action="#">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-uppercase">Your Name</label>
                            <input type="text" class="form-control rounded-0 border-dark-subtle py-2" placeholder="John Doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-uppercase">Email Address</label>
                            <input type="email" class="form-control rounded-0 border-dark-subtle py-2" placeholder="john@example.com">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold text-uppercase">Subject</label>
                            <select class="form-select rounded-0 border-dark-subtle py-2">
                                <option selected>Inquiry about a car</option>
                                <option>Test drive request</option>
                                <option>Selling my car</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold text-uppercase">Message</label>
                            <textarea class="form-control rounded-0 border-dark-subtle" rows="5" placeholder="Tell us what you are looking for..."></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-dark w-100 rounded-0 py-3 fw-bold text-uppercase" style="letter-spacing: 2px;">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-5 pt-5">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-center border shadow-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25214465.99233659!2d-7.779917008465011!3d39.515894790912306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796732c5d447961%3A0xebc2efffacb07fc4!2sBavarian%20Motor%20Cars%20GmbH%20-%20BMW%20Military%20Sales%20%7C%20Car%20Dealer%20-%20Kaiserslautern!5e0!3m2!1sru!2s!4v1769961628156!5m2!1sru!2s" width="1400" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection