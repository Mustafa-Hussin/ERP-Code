@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Marketing Campaigns</h3>
                    <div class="card-tools">
                        <a href="{{ route('marketings.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Campaign
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Campaign Name</th>
                                    <th>Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Budget</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($campaigns ?? [] as $campaign)
                                <tr>
                                    <td>{{ $campaign->id }}</td>
                                    <td>{{ $campaign->name }}</td>
                                    <td>{{ $campaign->type }}</td>
                                    <td>{{ $campaign->start_date }}</td>
                                    <td>{{ $campaign->end_date }}</td>
                                    <td>{{ $campaign->budget }}</td>
                                    <td>
                                        <span class="badge badge-{{ $campaign->status_color }}">
                                            {{ $campaign->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('marketings.show', $campaign) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('marketings.edit', $campaign) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('marketings.destroy', $campaign) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">No marketing campaigns found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection