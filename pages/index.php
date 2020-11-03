<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js" 
		  integrity="sha512-kp7YHLxuJDJcOzStgd6vtpxr4ZU9kjn77e6dBsivSz+pUuAuMlE2UTdKB7jjsWT84qbS8kdCWHPETnP/ctrFsA==" 
		  crossorigin="anonymous"></script>
<script type="text/babel">
class Test extends React.Component {
  constructor(props) {
    super(props);
    this.state = { textAreaValue: 'hello\navb', textlimit:10 };
	this.shoot = this.shoot.bind(this);
  }
  async shoot(event) {
	let currentValue = event.target.value.replace(/\n/gi, "");;
	let line = '';
	for(var i = 0; i < currentValue.length; i++){
	 if(line.length%6===0){
	   line+='\n';
	 }
	 line+=currentValue[i];
	 
	}
	await this.setState({ 'textAreaValue': line.toString() });
	this.forceUpdate(); 
  }
  
  render() {
	console.log("render: "+this.state.textAreaValue);
    return (<textarea width="300" height="30" style={{width:'50%'}} onChange={(event)=>{this.shoot(event)}}>
	{this.state.textAreaValue}
	</textarea>);
  }
}

ReactDOM.render(<Test />, document.getElementById('root'));
</script>
</head>
<body>

<div>

</div>

<div id="root"></div>
  
</body>
</html>
