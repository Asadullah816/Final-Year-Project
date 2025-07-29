  @extends('admin.adminlayout')
  @section('title', 'Profile')
  @section('content')
      @if (auth()->user()->admin == true)

          <div class="container my-4">

              <!-- ✅ User Info Section -->
              <div class="container bg-dark text-white p-4 rounded shadow-sm mb-4">
                  <h2 class="mb-3">User Profile</h2>
                  <div class="row">
                      <div class="col-md-4">
                          <img src="{{ $user->profile_photo_url ?? 'https://via.placeholder.com/150' }}"
                              class="img-fluid rounded-circle border border-light" alt="Profile Image">
                      </div>
                      <div class="col-md-8">
                          <h4>{{ $user->information->first_name ?? '' }} {{ $user->information->middle_name ?? '' }}
                              {{ $user->information->last_name ?? '' }}</h4>
                          <p><strong>Email:</strong> {{ $user->email }}</p>
                          <p><strong>Phone:</strong> {{ $user->information->phone ?? 'N/A' }}</p>
                          <p><strong>Date of Birth:</strong> {{ $user->information->date_of_birth ?? 'N/A' }}</p>
                          <p><strong>Current Address:</strong> {{ $user->information->current_address ?? 'N/A' }}</p>
                          <p><strong>Permanent Address:</strong> {{ $user->information->permanent_address ?? 'N/A' }}</p>
                          <p><strong>City:</strong> {{ $user->information->city ?? 'N/A' }}</p>
                          <p><strong>State:</strong> {{ $user->information->state ?? 'N/A' }}</p>
                          <p><strong>Emergency Number:</strong> {{ $user->information->emergency_number ?? 'N/A' }}</p>
                      </div>
                  </div>
              </div>

              <!-- ✅ Qualifications Section -->
              <div class="container bg-dark text-white p-4 rounded shadow-sm">
                  <h3 class="mb-3">Qualifications</h3>

                  @if ($user->qualification->count() > 0)
                      <table class="table table-dark table-bordered table-hover text-center">
                          <thead class="table-secondary text-dark">
                              <tr>
                                  <th>Qualification</th>
                                  <th>Obtained Marks</th>
                                  <th>Total Marks</th>
                                  <th>Percentage/GPA</th>
                                  <th>Passing Year</th>
                                  <th>Board Name</th>
                                  <th>Institute Name</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($user->qualification as $data)
                                  <tr>
                                      <td>{{ $data->name }}</td>
                                      <td>{{ $data->obtained_marks }}</td>
                                      <td>{{ $data->total_marks }}</td>
                                      <td>
                                          @if ($data->total_marks > 0)
                                              {{ number_format(($data->obtained_marks / $data->total_marks) * 100, 2) }}%
                                          @else
                                              N/A
                                          @endif
                                      </td>
                                      <td>{{ $data->passing_year }}</td>
                                      <td>{{ $data->board_name }}</td>
                                      <td>{{ $data->institute_name }}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  @else
                      <p class="text-muted">No qualifications added yet.</p>
                  @endif
              </div>

          </div>

      @endif
  @endsection
