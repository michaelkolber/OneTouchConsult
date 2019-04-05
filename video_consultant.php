<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//media.twiliocdn.com/sdk/js/video/releases/2.0.0-beta7/twilio-video.min.js"></script>
</head>
<body>
	<!--
		on new available room:
			get username and exec script:
	<script>
		var token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6InR3aWxpby1mcGE7dj0xIn0.eyJqdGkiOiJTSzBmYmU3YmViMGFhMTI1ZjM2ODBiYmQ2NDNjZjM1MjkzLTE1NTQ0MjY2NDYiLCJpc3MiOiJTSzBmYmU3YmViMGFhMTI1ZjM2ODBiYmQ2NDNjZjM1MjkzIiwic3ViIjoiQUNjMTRmNmNkNTc5MjUwNGY1ZGFjMGE5Nzg1ZTI1ODZkZSIsImV4cCI6MTU1NDQzMDI0NiwiZ3JhbnRzIjp7ImlkZW50aXR5IjoiZGV2a2V5IiwidmlkZW8iOnt9fX0.0j2cjgdUpbtKji6XPeytZXi-FsRzvFc6jou_GkHjcyM'
		const { connect } = require('twilio-video');

		connect(token, { name: userid }).then(room => {
		  console.log(`Successfully joined a Room: ${room}`);
		  room.on('participantConnected', participant => {
		    console.log(`A remote Participant connected: ${participant}`);
		  });
		}, error => {
		  console.error(`Unable to connect to Room: ${error.message}`);
		});
	</script>
	-->
</body>
</html>