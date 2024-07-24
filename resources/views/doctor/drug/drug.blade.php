@include('doctor.app.layout')
<style>
.content-wrap {
    width: 100%;
    max-width: 1200px;
}

.content-head {
    text-align: center;
    margin-bottom: 20px;
}

.card {
    background: #7FFFD4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

input[type="text"],
input[type="time"] {
    flex: 1 1 200px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    flex: 1 1 100px;
    padding: 10px 20px;
    border: none;
    background-color: #28a745;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

span {
    align-self: center;
    margin-right: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
</style>
	
	<main class="content-wrap">
		<header class="content-head">
			<h1>Drug Panel</h1>
		</header>
		
		<div class="content">
        <div class="card" style="background-color:#7FFFD4">
        <form method="POST" action="{{url('/add-drug')}}">
            @csrf
                <input type="text" placeholder="Enter Drug ID" required name="drug_id">
                <input type="text" placeholder="Enter Drug Name" required name="drug_name">
                <span>Morning</span>
                <input type="text" placeholder="Enter Dosage" name="morning_dosage">
                <input type="time" placeholder="Enter Morning Time" name="morning_time">
                <span>Afternoon</span>
                <input type="text" placeholder="Enter Dosage" name="afternoon_dosage">
                <input type="time" placeholder="Enter Afternoon Time" name="afternoon_time">
                <span>Evening</span>
                <input type="text" placeholder="Enter Dosage" name="evening_dosage">
                <input type="time" placeholder="Enter Evening Time" name="evening_time">
                <button type="submit">Add Drug</button>
            </form>
    </div>

    
    <div class="card">
            <h2>Drug Dosage List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Drug ID</th>
                        <th>Drug Name</th>
                        <th>Morning Dosage</th>
                        <th>Morning Time</th>
                        <th>Afternoon Dosage</th>
                        <th>Afternoon Time</th>
                        <th>Evening Dosage</th>
                        <th>Evening Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($drugs as $drug)
                    <tr>
                        <td>{{$drug->drug_id}}</td>
                        <td>{{$drug->drug_name}}</td>
                        <td>{{$drug->morning_dosage}}</td>
                        <td>{{$drug->morning_time}}</td>
                        <td>{{$drug->afternoon_dosage}}</td>
                        <td>{{$drug->afternoon_time}}</td>
                        <td>{{$drug->evening_dosage}}</td>
                        <td>{{$drug->evening_time}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            
		</div>
	</main>
</div>