<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with(['frameworks','hobbies','social_networks'])->get();

        return response()->json(['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'email' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'summary' => 'required|string',
            'frameworks' => 'required|array',
            'frameworks.*.id' => 'required|integer',
            'frameworks.*.name' => 'required|string',
            'frameworks.*.difficulty' => 'required|string',
            'frameworks.*.experience' => 'required|string',
            'hobbies' => 'required|array',
            'hobbies.*.id' => 'required|integer',
            'hobbies.*.name' => 'required|string|max:255',
            'social_networks' => 'required|array',
            'social_networks.*.id' => 'required|integer',
            'social_networks.*.name' => 'required|string|max:255',
            'social_networks.*.url' => 'required|url',
        ]);

        $user = User::findOrFail($id);

        $user->update($request->only([
            'name',
            'lastname',
            'age',
            'email',
            'city',
            'country',
            'summary'
        ]));

        foreach ($request->input('frameworks') as $frameworkData) {
            $framework = $user->frameworks()->where('id', $frameworkData['id'])->first();
            if ($framework) {
                $framework->update($frameworkData);
            }
        }

        foreach ($request->input('hobbies') as $hobbieData) {
            $hobbie = $user->hobbies()->where('id', $hobbieData['id'])->first();
            if ($hobbie) {
                $hobbie->update($hobbieData);
            }
        }

        foreach ($request->input('social_networks') as $socialNetworkData) {
            $socialNetwork = $user->social_networks()->where('id', $socialNetworkData['id'])->first();
            if ($socialNetwork) {
                $socialNetwork->update($socialNetworkData);
            }
        }

        $user = $user->fresh(['frameworks', 'hobbies', 'social_networks']);

        return response()->json(['user' => $user]);
    }
}
