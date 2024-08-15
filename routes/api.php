<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/joke', function () {
    $jokes = [
        "Why don't skeletons fight each other? They don't have the guts. 🦴",
        "What do you call fake spaghetti? An impasta! 🍝",
        "Why did the scarecrow win an award? Because he was outstanding in his field! 🌾",
        "What do you call a belt made out of watches? A waist of time! ⌚",
        "Why did the math book look sad? Because it had too many problems. 📚",
        "What do you call a fish wearing a crown? A king fish! 🐟",
        "Why did the tomato turn red? Because it saw the salad dressing! 🍅",
        "What do you call a bear with no teeth? A gummy bear! 🐻",
        "Why did the coffee file a police report? It got mugged. ☕",
        "What do you call a pile of cats? A meowtain! 🐱",
        "Why did the golfer bring two pairs of pants? In case he got a hole in one! ⛳",
        "What do you call a factory that makes okay products? A satisfactory! 🏭",
        "Why did the scarecrow become a successful neurosurgeon? He was outstanding in his field! 🧠",
        "What do you call a cow with two legs? Lean beef! 🐄",
    ];

    return response()->json(['joke' => $jokes[array_rand($jokes)]]);
});
