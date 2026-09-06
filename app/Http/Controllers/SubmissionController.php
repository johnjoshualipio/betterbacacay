<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmissionRequest;
use App\Models\Submission;
use Illuminate\Http\RedirectResponse;

class SubmissionController extends Controller
{
    public function store(StoreSubmissionRequest $request): RedirectResponse
    {
        $data = $request->validated();
        unset($data['website']);

        Submission::create($data);

        $message = match ($data['type']) {
            'newsletter' => 'You are on the BetterBacacay updates list.',
            'correction' => 'Your correction was received by BetterBacacay maintainers.',
            'broken_link' => 'Your broken-link report was received by BetterBacacay maintainers.',
            default => 'Your message was received by BetterBacacay maintainers.',
        };

        return back()->with('submission_success', $message);
    }
}
