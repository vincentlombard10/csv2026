<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @vite(['resources/js/site.js', 'resources/css/site.css'])
</head>
<body>
<h1 class="text-4xl">Laravel mPDF</h1>
<div>{{ $data["firstname"] }} {{ $data["lastname"] }}</div>
<div>{{ $data["email"] }} {{ $data["phone"] }}</div>
@php
$index = 1;
@endphp
@if($data["attendee1_fullname"])
    <div style="border: 1px solid black; margin-bottom: 10mm;">
        <div>Invité {{ $index }}</div>
        <div><span class="font-bold">Nom / Prénom :</span> {{ $data["attendee1_fullname"] }}</div>
        <div>Date de naissance : {{ $data["attendee1_birthdate"] }}</div>
        <div>Téléphone : {{ $data["attendee1_phone"] }}</div>
        <div>Adresse e-mail : {{ $data["attendee1_email"] }}</div>
    </div>
@endif
@if($data["attendee2_fullname"])
    @php
        $index++;
    @endphp
    <div style="border: 1px solid black; margin-bottom: 10mm;">
        <div>Invité {{ $index }}</div>
        <div>Nom / Prénom : {{ $data["attendee2_fullname"] }}</div>
        <div>Date de naissance : {{ $data["attendee2_birthdate"] }}</div>
        <div>Téléphone : {{ $data["attendee2_phone"] }}</div>
        <div>Adresse e-mail : {{ $data["attendee2_email"] }}</div>
    </div>
@endif
@if($data["attendee3_fullname"])
    @php
        $index++;
    @endphp
    <div style="border: 1px solid black; margin-bottom: 10mm;">
        <div>Invité {{ $index }}</div>
        <div>Nom / Prénom : {{ $data["attendee3_fullname"] }}</div>
        <div>Date de naissance : {{ $data["attendee3_birthdate"] }}</div>
        <div>Téléphone : {{ $data["attendee3_phone"] }}</div>
        <div>Adresse e-mail : {{ $data["attendee3_email"] }}</div>
    </div>

@endif
@if($data["attendee4_fullname"])
    @php
        $index++;
    @endphp
    <div style="border: 1px solid black; margin-bottom: 10mm;">
        <div>Invité {{ $index }}</div>
        <div>Nom / Prénom : {{ $data["attendee4_fullname"] }}</div>
        <div>Date de naissance : {{ $data["attendee4_birthdate"] }}</div>
        <div>Téléphone : {{ $data["attendee4_phone"] }}</div>
        <div>Adresse e-mail : {{ $data["attendee4_email"] }}</div>
    </div>

@endif
@if($data["attendee5_fullname"])
    @php
        $index++;
    @endphp
    <div style="border: 1px solid black; margin-bottom: 10mm;">
        <div>Invité {{ $index }}</div>
        <div>Nom / Prénom : {{ $data["attendee5_fullname"] }}</div>
        <div>Date de naissance : {{ $data["attendee5_birthdate"] }}</div>
        <div>Téléphone : {{ $data["attendee5_phone"] }}</div>
        <div>Adresse e-mail : {{ $data["attendee5_email"] }}</div>
    </div>
@endif
</body>
</html>
