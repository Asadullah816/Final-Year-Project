@extends('layout.layout')
@section('title', 'User Qualifications');
@section('content')
    <div class="container-fluid page-hero-container d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-itmes-center">
            <div class="page-hero">
                <div class="page-hero-heading">
                    <h2>
                        Register Online
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="register-form py-5 d-flex justify-content-center align-items-center flex-column">
            <h2 class="heading">Add Qualification</h2>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>{{ $error }}
                        <button type="button" class="btn-close text-danger" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <form action="{{ route('qualification') }}" method="POST"
                class="reg-form d-flex justify-centent-center align-items-center flex-column">
                @csrf
                <div id="qualifications" class="d-flex flex-column gap-4">
                    <div class="qualification  d-flex flex-column gap-4">
                        <div class="input-dev row w-100">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <select name="qualification[0][name]" id="qualification" class="reg-inp">
                                <option value="" selected disabled>Qualification</option>
                                <option value="hssc">HSSC</option>
                                <option value="metric">Metric</option>
                                <option value="ba">BA</option>
                                <option value="bs">BS</option>
                            </select>
                        </div>
                        <div class="input-dev row w-100">
                            <div class="col-12 col-md input-dev p-0">
                                <label for="obtain_marks">Obtain Marks</label>
                                <input type="number" class="reg-inp" name="qualification[0][obtain_marks]"
                                    id="obtain_marks" placeholder="Obtained Marks">
                            </div>
                            <div class="col-12 col-md input-dev ">
                                <label for="total-marks">Total Marks</label>
                                <input type="number" class="reg-inp" name="qualification[0][total_marks]" id="total-marks"
                                    placeholder="Total Marks">
                            </div>
                            <div class="col-12 col-md input-dev p-0">
                                <label for="percentage">Percentage/GPA</label>
                                <input type="number" class="reg-inp" id="percentage" name="qualification[0][percentage]"
                                    placeholder="Percentage/GPA">
                            </div>

                        </div>
                        <div class="input-dev row w-100">
                            <div class="col-12 col-md input-dev p-0">
                                <label for="passing">Year of Passing</label>
                                <input type="date" class="reg-inp" id="passing" name="qualification[0][passing_year]"
                                    placeholder="Year of Passing">
                            </div>
                            <div class="col-12 col-md input-dev">
                                <label for="board">Board Name</label>
                                <input type="text" class="reg-inp" id="board" name="qualification[0][board_name]"
                                    placeholder="Board Name">
                            </div>
                            <div class="col-12 col-md input-dev p-0">
                                <label for="inst">Institute Name</label>
                                <input type="text" class="reg-inp" id="inst" name="qualification[0][institute_name]"
                                    placeholder="Institute Name">
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="cus-btn qual-btn" onclick="addQualification()">Add More</button>
                </div>

                <div class="form-btn d-flex justify-centent-center align-items-center flex-column">
                    <button type="submit" class="cus-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
<script>
    let count = 1;

    function addQualification() {
        const wrapper = document.getElementById('qualifications');
        const group = document.createElement('div');
        group.className = 'qualification d-flex flex-column gap-4';

        group.innerHTML = `
          <div class="qualification  d-flex flex-column gap-4">
                        <div class="input-dev row w-100">
                            <select name="qualification[${count}][name]" id="qualification" class="reg-inp">
                                <option value="" selected disabled>Qualification</option>
                                <option value="hssc">HSSC</option>
                                <option value="metric">Metric</option>
                                <option value="ba">BA</option>
                                <option value="bs">BS</option>
                            </select>
                        </div>
                        <div class="input-dev row w-100">
                            <div class="col-12 col-md input-dev p-0">
                                <label for="obtain_marks">Obtain Marks</label>
                                <input type="number" class="reg-inp" name="qualification[${count}][obtain_marks]" id="obtain_marks"
                                    placeholder="Obtained Marks">
                            </div>
                            <div class="col-12 col-md input-dev ">
                                <label for="total-marks">Total Marks</label>
                                <input type="number" class="reg-inp" name="qualification[${count}][total_marks]" id="total-marks"
                                    placeholder="Total Marks">
                            </div>
                            <div class="col-12 col-md input-dev p-0">
                                <label for="percentage">Percentage/GPA</label>
                                <input type="number" class="reg-inp" id="percentage" name="qualification[${count}][percentage]"
                                    placeholder="Percentage/GPA">
                            </div>

                        </div>
                        <div class="input-dev row w-100">
                            <div class="col-12 col-md input-dev p-0">
                                <label for="passing">Year of Passing</label>
                                <input type="date" class="reg-inp" id="passing" name="qualification[${count}][passing_year]"
                                    placeholder="Year of Passing">
                            </div>
                            <div class="col-12 col-md input-dev">
                                <label for="board">Board Name</label>
                                <input type="text" class="reg-inp" id="board" name="qualification[${count}][board_name]"
                                    placeholder="Board Name">
                            </div>
                            <div class="col-12 col-md input-dev p-0">
                                <label for="inst">Institute Name</label>
                                <input type="text" class="reg-inp" id="inst" name="qualification[${count}][institute_name]"
                                    placeholder="Institute Name">
                            </div>

                        </div>
                    </div>
                     <button type="button" class="remove-btn cus-btn qual-btn" onclick="removeQualification(this)">Remove</button>
    `;

        wrapper.appendChild(group);
        count++;
    }

    function removeQualification(button) {
        const group = button.parentNode;
        group.remove();
        reindexQualifications();
    }

    function reindexQualifications() {
        const groups = document.querySelectorAll('.qualification-group');
        groups.forEach((group, index) => {
            const inputs = group.querySelectorAll('input');
            inputs[0].name = `qualifications[${index}][degree]`;
            inputs[1].name = `qualifications[${index}][institution]`;
            inputs[2].name = `qualifications[${index}][year]`;
        });
        count = groups.length;
    }
</script>
