/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Sewa;



/**
 *
 * @author SPLASH
 */
public class LinkedList{
    Node head;
    int size;
    public LinkedList(){
        head=null;
        size=0;
    }
    public boolean isEmpty(){
        return head == null;
    }
    public void addFirst(Mobil item){
        head = new Node(item, null);
        size++;
    }
    public void add(Mobil item, int index) throws Exception{
        if (index < 0 || index > size) {
            throw new Exception("Nilai index di luar batas");
        }
        if (isEmpty() || index == 0) {
            addFirst(item);
        }else{
            Node tmp = head;
            for (int i = 1; i < index; i++) {
                tmp = tmp.next;
            }
            Node next = (tmp==null)? null: tmp.next;
            tmp.next = new Node(item,next);
            size++;
        }
    }
    public void addLast(Mobil item){
        if (isEmpty()) {
            addFirst(item);
        }else{
            Node tmp = head;
            while (tmp.next != null) {                
                tmp = tmp.next;
            }
            tmp.next = new Node(item,null);
            size++;
        }
    }
    public Mobil getFirst() throws Exception{
        if (isEmpty()) {
            throw new Exception("LinkedList kosong");
        }
        return head.data;
    }
    public Mobil getLast() throws Exception{
        if (isEmpty()) 
        {
            throw new Exception("LinkedList kosong");
        }
        Node tmp = head;
        while (tmp.next != null) {            
            tmp = tmp.next;
        }
        return tmp.data;
    }
    public Mobil get(int index) throws Exception{
        if (isEmpty() || index >=size) {
            throw new Exception("Nilai index di luar batas");
        }
        Node tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        return tmp.data;
    }
    public int getStatusMobil (String item) throws Exception{
        int index = getKey(item);
        int status =0;
//        if (index==-1) {
//            throw new Exception("Data tidak tersedia");
//            
//        }
        Node tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        if (tmp.data.available.equalsIgnoreCase("available")) {
            status = 1;
        }
        return status;
    }
    public void changeAtrib (String item, String available) throws Exception{
        int index = getKey(item);
        Node tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        tmp.data.available = available;
    }
    public int getKey (String item) throws Exception{
        Node tmp = head;
        int simpan=-1;
        for (int i = 0; i < size; i++) {
            
            if (tmp.data.kdMobil.equalsIgnoreCase(item)) {
                simpan=i;
                break;
            }
            tmp=tmp.next;
        }
        return simpan;
    }
    public void removeKey (String item) throws Exception{
        Node tmp = head;
        for (int i = 0; i < size; i++) {
            
            if (tmp.data.kdMobil.equalsIgnoreCase(item)) {
                remove(i);
                break;
            }
            tmp=tmp.next;
        }
    }
    public void remove(int index) throws Exception{
        if (isEmpty() || index >=size) {
            throw new Exception("Nilai index di luar batas");
        }
        if (isEmpty() || index == 0) {
            removeFirst();
        }else{
            Node prev = head;
            Node cur = head.next;
            for (int i = 1; i < index; i++) {
                prev = cur;
                cur = prev.next;
            }
            prev.next = cur.next;
            size--;
        }
    }
    public void removeFirst() throws Exception{
        Mobil tmp = getFirst();
        head = head.next;
        size--;
    }
    public void clear(){
        head= null;
        size=0;
    }
    public void print(){
        if (!isEmpty()) {
            Node tmp = head;
            int urut=1;
            while (tmp != null) {
                System.out.print(urut+" ");
                tmp.data.print();
                System.out.println("_______________________");
                tmp = tmp.next;
                urut++;
            }
        }else{
            System.out.println("Data Mobil kosong");
        }
    }

    
}
