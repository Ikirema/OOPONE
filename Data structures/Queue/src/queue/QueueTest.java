/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package queue;

/**
 *
 * @author user
 */
public class QueueTest {
    
    
    public static void main(String[] args){
       Queue theQueue = new Queue(10);
       
       theQueue.insert(1);
       theQueue.insert(5);
       theQueue.insert(7);
       theQueue.insert(78);
       theQueue.insert(9);
       theQueue.insert(10);
       theQueue.insert(31);
       theQueue.insert(23);
       theQueue.insert(4);
       theQueue.insert(44);
       
       
       for(int i=0; i<10; i++)
       {
           System.out.println(theQueue.queArray[i] + " ");
       }
       
       System.out.println(" ");
       
       System.out.println("The value front (index) is: " +theQueue.front);
       System.out.println("The item at the front is: " +theQueue.queArray[theQueue.front]);
       System.out.println("The item at the front is: " +theQueue.peekFront());
       
       System.out.println("The value of rear (index)is: " +theQueue.rear);
       System.out.println("The value at the rear is: " +theQueue.queArray[theQueue.rear]);

      theQueue.remove();  //does not delete the value
      theQueue.remove();
      theQueue.insert(11);
      
      System.out.println(" ");
      
      for(int i=0; i<10; i++)
       {
           System.out.println(theQueue.queArray[i] + " ");
       }
       
       System.out.println(" ");
       
       System.out.println("The value front (index) is: " +theQueue.front);
       System.out.println("The item at the  front is: " +theQueue.queArray[theQueue.front]);
       System.out.println("The item at the front is: " +theQueue.peekFront());
       
       System.out.println("The value of rear (index)is: " +theQueue.rear);
       System.out.println("The value at the rear is: " +theQueue.queArray[theQueue.rear]);

    }
}
