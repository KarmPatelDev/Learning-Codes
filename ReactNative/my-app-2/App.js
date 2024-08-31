import react, { Component } from 'react';
import { Text, TextInput, View, Button } from 'react-native';
import Student from './component/student';

class App extends Component{

  constructor(){
    super();
    //state
    this.state = {
      //state list
      name: "Anil",
      age: 20
    }
  }
  
  fruit = () => {
    console.warn("Apple");
  }

  updateName(val){
    this.setState({name: val});
  }

  updateAge(val){
    this.setState({age: val});
  }

  render(){
    return(
      <View>
        <Text style={{fontSize: 30, color: 'red'}}>Class Component</Text>
        
        <Button title='Press Me' onPress={this.fruit}/>

        <Text style={{fontSize: 30, color: 'red'}}>{this.state.name}</Text>
        <Text style={{fontSize: 30, color: 'red'}}>{this.state.age}</Text>
        <TextInput placeholder='Enter Your Name' onChangeText={(text)=>this.updateName(text)} />
        <TextInput placeholder='Enter Your Age' onChangeText={(text)=>this.updateAge(text)} />


        <Student name={this.state.name} />

      </View>
    )
  }
}

export default App;
