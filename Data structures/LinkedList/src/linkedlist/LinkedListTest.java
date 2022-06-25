/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package linkedlist;

/**
 *
 * @author user
 */
public class LinkedListTest {

    public static void main(String[] args) {
        // TODO code application logic here
        LinkedList Llist = new LinkedList();
       
        Llist.addToHead("ICS.01");
        Llist.add("55");
        Llist.add("65");
        Llist.add("105");
        Llist.add("205");
        Llist.add("85");
        Llist.add("95");
       
        System.out.println("Transversing the list");
        Llist.traverse();
       
       System.out.println("Llist.size() - print linkedlist size: " + Llist.size());
        System.out.println("Llist.get(3) - get 3rd element: " + Llist.get(3));
        System.out.println("Llist.remove(2) - remove 2nd element: " + Llist.remove(2));
        System.out.println("Traversing the list ");
        Llist.traverse();

       
    }
   
}
