@extends('layouts.dashboard')

@section('dash-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Add New PDF Resource</h4>
                        <a href="{{ route('pdfresources.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pdfresources.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('title') is-invalid @enderror"
                                       id="title"
                                       name="title"
                                       value="{{ old('title') }}"
                                       placeholder="Enter the resource title"
                                       required>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="form-control @error('type') is-invalid @enderror"
                                        id="type"
                                        name="type"
                                        required>
                                    <option value="">Select Resource Type</option>
                                    <option value="Manual" {{ old('type') == 'Manual' ? 'selected' : '' }}>Manual</option>
                                    <option value="Guide" {{ old('type') == 'Guide' ? 'selected' : '' }}>Guide</option>
                                    <option value="Documentation" {{ old('type') == 'Documentation' ? 'selected' : '' }}>Documentation</option>
                                    <option value="Report" {{ old('type') == 'Report' ? 'selected' : '' }}>Report</option>
                                    <option value="Tutorial" {{ old('type') == 'Tutorial' ? 'selected' : '' }}>Tutorial</option>
                                    <option value="Whitepaper" {{ old('type') == 'Whitepaper' ? 'selected' : '' }}>Whitepaper</option>
                                    <option value="Other" {{ old('type') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="description"
                                          name="description"
                                          rows="4"
                                          placeholder="Enter a detailed description of the resource"
                                          required>{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="url" class="form-label">URL <span class="text-muted">(Optional)</span></label>
                                <input type="url"
                                       class="form-control @error('url') is-invalid @enderror"
                                       id="url"
                                       name="url"
                                       value="{{ old('url') }}"
                                       placeholder="https://example.com/resource.pdf">
                                @error('url')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">
                                    If provided, this should be a direct link to the PDF resource.
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('pdfresources.index') }}" class="btn btn-secondary me-md-2">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Create Resource
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Optional: Add custom type input when "Other" is selected
        document.getElementById('type').addEventListener('change', function() {
            if (this.value === 'Other') {
                // You can add custom logic here if needed
                console.log('Other type selected');
            }
        });
    </script>
@endsection
