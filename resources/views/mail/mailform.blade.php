@include('components.header')
<form action="{{ route('sendmail') }}" method="POST">
    <div class="container mail-container">
        @csrf
        <h2 class="text-center mb-4">Mail System</h2>
        <div class="form-container">
            <h4>Send a Mail</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Recipient Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Mail</button>
            </form>
        </div>
    </div>
</form>
@include('components.footer')
