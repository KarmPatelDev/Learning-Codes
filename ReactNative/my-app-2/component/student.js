import react, { Component } from 'react';
import { Text, TextInput, View, Button } from 'react-native';

class Student extends Component{

  render(){
    return(
      <View>
        <Text style={{fontSize: 30, color: 'red'}}>Student Component</Text>
        <Text style={{fontSize: 30, color: 'red'}}>Name: {this.props.name}</Text>
        <TextInput placeholder='Enter Your Name' />
        <Button title='Press Me'/>
      </View>
    )
  }

}

export default Student;