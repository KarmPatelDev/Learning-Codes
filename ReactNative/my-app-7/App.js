import React, { useState, useEffect } from 'react';
import { ScrollView, StyleSheet, Text, View, FlatList } from 'react-native';

export default function App() {

  // on data
  // const [data, setData] = useState(undefined);
  // list of data
  const [data, setData] = useState([]);

  const getAPIData = async () => {
    // const url = "https://jsonplaceholder.typicode.com/posts/1";
    const url = "https://jsonplaceholder.typicode.com/posts";
    let result = await fetch(url);
    result = await result.json();
    console.warn(result);
    setData(result);
  }

  useEffect(() => {
    getAPIData();
  }, [])

  return (
    <>
     <View>
     {/* One JSON DATA */}
     {/* {
      data ? <View>
      <Text style={{fontSize:30}}>{data.id}</Text>
      <Text style={{fontSize:30}}>{data.userId}</Text>
      <Text style={{fontSize:30}}>{data.title}</Text>
      </View> : null
     } */}
     </View>

     {/* List of JSON DATA using Map */}
     {/* <ScrollView>
     {
      data.length ?
          data.map((item) =>
            <View style={{padding: 10, borderBottomColor: '#ccc', borderBottomWidth:1}}>
            <Text>UserId - {item.userId}</Text>
            <Text>Id - {item.id}</Text>
            <Text>Name - {item.title}</Text>
            <Text>Body - {item.body}</Text>
            </View>
          )
     : null
     }
     </ScrollView> */}

     {/* List of JSON DATA using FlatList */}
     {
      data.length ?
      <FlatList data={data} renderItem={({item}) => <View style={{padding: 10, borderBottomColor: '#ccc', borderBottomWidth:1}}>
      <Text>UserId - {item.userId}</Text>
      <Text>Id - {item.id}</Text>
      <Text>Name - {item.title}</Text>
      <Text>Body - {item.body}</Text>
      </View>
      }/>
      : null
    }

    </>
  );
}
