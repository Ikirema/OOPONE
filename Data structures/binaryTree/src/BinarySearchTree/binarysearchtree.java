/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BinarySearchTree;

/**
 *
 * @author user
 */
public class binarysearchtree {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
  BSTree tree = new BSTree();
        tree.root = new BSTNode(1);
        tree.root.left = new BSTNode(2);
        tree.root.right = new BSTNode(3);
        tree.root.left.left = new BSTNode(4);
        tree.root.left.right = new BSTNode(5);
        System.out.print("\nPost Order: ");
        tree.postorder();
        System.out.print("\nPre Order: ");
        tree.preorder();
        System.out.print("\nIn Order: ");
        tree.inorder();
    }
    
}
