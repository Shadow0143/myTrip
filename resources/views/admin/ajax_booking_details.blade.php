<thead>
    <tr>
        <th>Sl.No.</th>
        <th>Enquiry ID</th>
        <th>Journey Date</th>
        <th>Name</th>
        <th>Email ID</th>
        <th>Contact No.</th>
        <th style="width:120px">Lead Source</th>
        <th>Lead Type</th>
        <th>Date Of Entry</th>
        <th>Entered By</th>
        <th>Status</th>
        <th>History</th>
        <th>Emp Feedback</th>
        <th>Rank</th>
        <th>Assign To</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['enqueryId'] }}</td>
        <td>{{ $item['created_at'] }}</td>
        <td>{{ $item['customerName'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td>{{ $item['contactNumber'] }}</td>
        <td>
            <div style="width:120px">{{ $item['leadSource'] }}</div>
        </td>
        <td>{{ $item['leadType'] }}</td>
        <td>
            <div style="width:120px">{{ $item['created_at'] }}</div>
        </td>
        <td>{{ $item['createdBy'] }}</td>
        <td><button type="button" class="btn btn-primary btncl" data-toggle="modal"
                data-target="#comnt154">{{ $item['status'] }}</button>
        </td>
        <td><button type="button" class="btn btn-primary btncomntcli57" data-code="{{ $item['enqueryId'] }}">View
                Comment</button></td>
        <td>{{ $item['createdBy'] }}</td>
        <td>{{ $item['rank'] }}</td>
        <td>{{ $item['assignTo'] }}</td>
    </tr>
</tbody>
